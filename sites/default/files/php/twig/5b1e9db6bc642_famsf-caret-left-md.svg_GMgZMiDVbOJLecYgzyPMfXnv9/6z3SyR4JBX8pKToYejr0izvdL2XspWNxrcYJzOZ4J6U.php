<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-caret-left-md.svg */
class __TwigTemplate_e88c5aee18268805a08440984875c7c56771f73b00822621fb5c4dcc531e662a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 14.1 27\" style=\"enable-background:new 0 0 14.1 27;\" xml:space=\"preserve\">
<path d=\"M13.1,27c-0.3,0-0.5-0.1-0.7-0.3L0.3,14.2c-0.4-0.4-0.4-1,0-1.4L12.4,0.3c0.4-0.4,1-0.4,1.4,0
\tC14,0.5,14.1,0.7,14.1,1v6.2c0,0.3-0.1,0.5-0.3,0.7l-5.4,5.6l5.4,5.6c0.2,0.2,0.3,0.4,0.3,0.7V26c0,0.4-0.2,0.8-0.6,0.9
\tC13.3,27,13.2,27,13.1,27z M2.4,13.5l9.7,10v-3.3l-5.8-6c-0.4-0.4-0.4-1,0-1.4l5.8-6V3.5L2.4,13.5z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-left-md.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 14.1 27\" style=\"enable-background:new 0 0 14.1 27;\" xml:space=\"preserve\">
<path d=\"M13.1,27c-0.3,0-0.5-0.1-0.7-0.3L0.3,14.2c-0.4-0.4-0.4-1,0-1.4L12.4,0.3c0.4-0.4,1-0.4,1.4,0
\tC14,0.5,14.1,0.7,14.1,1v6.2c0,0.3-0.1,0.5-0.3,0.7l-5.4,5.6l5.4,5.6c0.2,0.2,0.3,0.4,0.3,0.7V26c0,0.4-0.2,0.8-0.6,0.9
\tC13.3,27,13.2,27,13.1,27z M2.4,13.5l9.7,10v-3.3l-5.8-6c-0.4-0.4-0.4-1,0-1.4l5.8-6V3.5L2.4,13.5z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-left-md.svg", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/styleguide/src/includes/svg/famsf-caret-left-md.svg");
    }
}
