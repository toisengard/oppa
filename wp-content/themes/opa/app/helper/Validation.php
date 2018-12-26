<?php
namespace Helper;


class Validation
{
    /**
     * Check Validation.
     *
     * @param $rules
     */
    public static function make( $rules )
    {
        $validates = true;

        if ( ! empty( $rules ) )
        {
            foreach ( $rules as $ruleArr )
            {
                foreach ( $ruleArr as $rule => $input )
                {
                    if ( ! self::validates( $rule, $input ) )
                    {
                        $validates = false;
                    }
                }
            }
        }

        return $validates;
    }

    /**
     * Check Single Validation.
     *
     * @param $rule
     * @param $input
     */
    protected static function validates( $rule, $input )
    {
        $validates = true;
        if ( $rule == 'required' && ! trim( $input ) )
        {
            $validates = false;
        }

        if ( $rule == 'equals' && ( ! $input || empty( $input ) || $input[0] != $input[1] ) )
        {
            $validates = false;
        }

        return $validates;
    }
}
