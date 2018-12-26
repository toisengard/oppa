<?php namespace Flugegegenxolen;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Make extends Command {
	/* Theme Folder Name */
	protected $themeName = 'wp-base';

	/**
	 * Set Command Configuration.
	 */
	public function configure()
	{
		$this -> setName('make')
			  -> addArgument('object', InputArgument::REQUIRED)
			  -> addOption('name', null, InputOption::VALUE_REQUIRED);
	}

	/**
	 * Execute Command.
	 *
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 */
	public function execute(InputInterface $input, OutputInterface $output)
	{
		$object = $input -> getArgument('object');
		$name   = $input -> getOption('name');

		if ($object == 'single')
		{
			$name = 'single-' . $name;
		}
		else if ($object != 'page')
		{
			$output -> writeln('<error>Make what ?</error>');

			return;
		}

		$this -> createFile('createControllerFile', $output, 'Controller', $name);
		$this -> createFile('createViewFile', $output, 'View', $name);
		$this -> createFile('createJSFile', $output, 'JS', $name);
		$this -> createFile('createCSSFile', $output, 'CSS', $name);
		$this -> createFile('createJSONFile', $output, 'JSON', $name, $object);
	}

	/**
	 * Create File.
	 *
	 * @param $callback
	 * @param $output
	 * @param $fileType
	 * @param $name
	 * @param $object
	 */
	protected function createFile($callback, $output, $fileType, $name, $object = false)
	{
		set_error_handler(function() use ($output, $fileType) {
			$output -> writeln('<error>Could not create ' . $fileType . ' file</error>');

			exit();
		}, E_WARNING);
		
		if ($object ? $this -> $callback($name, $object) : $this -> $callback($name))
		{
			$output -> writeln('<info>' . $fileType . ' created successfully</info>');
		}
		else
		{
			$output -> writeln('<error>Could not create ' . $fileType . ' file</error>');
		}

		restore_error_handler();
	}

	/**
	 * Create Controller file inside WP Base Theme.
	 *
	 * @param $name
	 */
	protected function createControllerFile($name)
	{
		$content 	  = "" .
			"<?php" . "\n" .
			"/* Template Name: " . ucfirst($name) . " */" . "\n" .
			"\n" .
			"// Use Blade" . "\n" .
			"use \Library\Blade;" . "\n" .
			"\n" .
			"\n" .
			"Blade::loadPage( 'pages." . $name . "' );" . "\n";

		$file 		  = fopen('wp-content/themes/' . $this -> themeName . '/' . $name . '.php', 'wb');
		fwrite($file, $content);
		fclose($file);

		return true;
	}

	/**
	 * Create View file inside WP Base Theme.
	 *
	 * @param $name
	 */
	protected function createViewFile($name)
	{
		$content 	  = "" .
			"@extends('pages.master')" . "\n" .
			"\n" .
			"@section('content')" . "\n" .
			"\n" .
			"\t" . ucfirst($name) . " Page" . "\n" .
			"\n" .
			"@endsection" . "\n";

		$file 		  = fopen('wp-content/themes/' . $this -> themeName . '/views/pages/' . $name . '.blade.php', 'wb');
		fwrite($file, $content);
		fclose($file);

		return true;
	}

	/**
	 * Create JS file inside WP Base Theme.
	 *
	 * @param $name
	 */
	protected function createJSFile($name)
	{
		$file = fopen('wp-content/themes/' . $this -> themeName . '/assets/js/' . $name . '.js', 'wb');
		fclose($file);

		return true;
	}

	/**
	 * Create CSS file inside WP Base Theme.
	 *
	 * @param $name
	 */
	protected function createCSSFile($name)
	{
		$file = fopen('wp-content/themes/' . $this -> themeName . '/assets/sass/' . $name . '.scss', 'wb');
		fclose($file);

		return true;
	}

	/**
	 * Create JSON file inside WP Base Theme.
	 *
	 * @param $name
	 * @param $object
	 */
	protected function createJSONFile($name, $object)
	{
		$fileLocation = 'flugegegenxolen.json';

		$file 	 = fopen($fileLocation, 'r');
		$content = fread($file, filesize($fileLocation));
		fclose($file);

		$content = json_decode($content, true);

		$pushArr = [];
		if ($object == 'page')
		{
			$pushArr = [
				'template' => $name
			];
		}
		else if ($object == 'single')
		{
			$pushArr = [
				'single' => str_replace('single-', '', $name)
			];
		}
		else
		{
			return false;
		}

		array_push($content, $pushArr);

		$content = json_encode($content, JSON_PRETTY_PRINT);

		$file 	 = fopen($fileLocation, 'wb');
		fwrite($file, $content);
		fclose($file);

		return true;
	}
}
