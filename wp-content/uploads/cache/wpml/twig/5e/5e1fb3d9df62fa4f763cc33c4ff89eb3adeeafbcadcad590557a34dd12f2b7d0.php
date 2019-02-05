<?php

/* section-shortcode-action.twig */
class __TwigTemplate_247e7c015e1bf9bae59fc40e483ade8e142e548dda0a5f23c286703825938c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>";
        echo $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "section_description", array());
        echo "</p>
<p>
    <input type=\"checkbox\" id=\"wpml-ls-show-in-shortcode-actions\" name=\"statics[shortcode_actions][show]\" value=\"1\"
                   class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-shortcode-actions-toggle-target\"
                   ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "show", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>

    <label for=\"wpml-ls-show-in-shortcode-actions\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "show", array()), "html", null, true);
        echo "</label>
</p>

<div class=\"hidden\">
    ";
        // line 11
        $context["slot_settings"] = array();
        // line 12
        echo "    ";
        $context["slot_settings"] = twig_array_merge(($context["slot_settings"] ?? null), array("shortcode_actions" => $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "footer", array())));
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("table-slots.twig", "section-shortcode-action.twig", 14)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" =>         // line 17
($context["slot_settings"] ?? null), "slug" => "shortcode_actions")));
        // line 21
        echo "
</div>

<div class=\"js-wpml-ls-shortcode-actions-toggle-target alignleft";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "show", array()) != 1)) {
            echo " hidden";
        }
        echo "\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "customize_button_label", array()), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "section-shortcode-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  57 => 24,  52 => 21,  50 => 17,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  34 => 7,  27 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>{{ strings.shortcode_actions.section_description|raw }}</p>
<p>
    <input type=\"checkbox\" id=\"wpml-ls-show-in-shortcode-actions\" name=\"statics[shortcode_actions][show]\" value=\"1\"
                   class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-shortcode-actions-toggle-target\"
                   {% if settings.statics.shortcode_actions.show %}checked=\"checked\"{% endif %}/>

    <label for=\"wpml-ls-show-in-shortcode-actions\">{{ strings.shortcode_actions.show }}</label>
</p>

<div class=\"hidden\">
    {% set slot_settings = [] %}
    {% set slot_settings = slot_settings|merge({'shortcode_actions': settings.statics.footer}) %}

    {% include 'table-slots.twig'
        with {
            \"slot_type\": \"statics\",
            \"slots_settings\": slot_settings,
            \"slug\"     : 'shortcode_actions',
        }
    %}

</div>

<div class=\"js-wpml-ls-shortcode-actions-toggle-target alignleft{% if settings.statics.shortcode_actions.show != 1 %} hidden{% endif %}\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">{{ strings.shortcode_actions.customize_button_label }}</button>
</div>", "section-shortcode-action.twig", "/var/www/html/wp-content/plugins/sitepress-multilingual-cms-master/templates/language-switcher-admin-ui/section-shortcode-action.twig");
    }
}
