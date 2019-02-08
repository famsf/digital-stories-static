<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-caret-down-sm.svg */
class __TwigTemplate_8a840f21ea8aa9fbfb3ab69f230590d6a9c6ceb10f9aa95e1c0613fb391b32a7 extends Twig_Template
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
   viewBox=\"0 0 35.1 18\" style=\"enable-background:new 0 0 35.1 18;\" xml:space=\"preserve\">
<path d=\"M17.6,18c-0.2,0-0.5-0.1-0.7-0.3L0.3,1.7C0,1.4-0.1,1,0.1,0.6C0.2,0.2,0.6,0,1,0h8.3C9.6,0,9.8,0.1,10,0.3
    l7.6,7.3l7.5-7.3C25.3,0.1,25.5,0,25.8,0h8.3c0.4,0,0.8,0.2,0.9,0.6s0.1,0.8-0.2,1.1l-16.5,16C18.1,17.9,17.9,18,17.6,18z M3.5,2
    l14.1,13.6L31.6,2h-5.4l-7.9,7.7c-0.4,0.4-1,0.4-1.4,0L8.9,2H3.5z\"/>
</svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-down-sm.svg";
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
   viewBox=\"0 0 35.1 18\" style=\"enable-background:new 0 0 35.1 18;\" xml:space=\"preserve\">
<path d=\"M17.6,18c-0.2,0-0.5-0.1-0.7-0.3L0.3,1.7C0,1.4-0.1,1,0.1,0.6C0.2,0.2,0.6,0,1,0h8.3C9.6,0,9.8,0.1,10,0.3
    l7.6,7.3l7.5-7.3C25.3,0.1,25.5,0,25.8,0h8.3c0.4,0,0.8,0.2,0.9,0.6s0.1,0.8-0.2,1.1l-16.5,16C18.1,17.9,17.9,18,17.6,18z M3.5,2
    l14.1,13.6L31.6,2h-5.4l-7.9,7.7c-0.4,0.4-1,0.4-1.4,0L8.9,2H3.5z\"/>
</svg>", "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-down-sm.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-caret-down-sm.svg");
    }
}
