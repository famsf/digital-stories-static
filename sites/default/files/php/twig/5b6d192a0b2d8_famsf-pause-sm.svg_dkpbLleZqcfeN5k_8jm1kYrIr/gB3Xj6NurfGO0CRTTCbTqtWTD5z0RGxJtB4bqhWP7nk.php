<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-pause-sm.svg */
class __TwigTemplate_232e98ef5325484b7adb70e3c66fd807c522e69b11a4e01a97b3ba67bbe9095c extends Twig_Template
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
   viewBox=\"0 0 15 18\" style=\"enable-background:new 0 0 15 18;\" xml:space=\"preserve\">
<path d=\"M5,18H1c-0.6,0-1-0.4-1-1V1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v16C6,17.6,5.6,18,5,18z M2,16h2V2H2V16z M14,18
  h-4c-0.6,0-1-0.4-1-1V1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v16C15,17.6,14.6,18,14,18z M11,16h2V2h-2V16z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-pause-sm.svg";
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
   viewBox=\"0 0 15 18\" style=\"enable-background:new 0 0 15 18;\" xml:space=\"preserve\">
<path d=\"M5,18H1c-0.6,0-1-0.4-1-1V1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v16C6,17.6,5.6,18,5,18z M2,16h2V2H2V16z M14,18
  h-4c-0.6,0-1-0.4-1-1V1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v16C15,17.6,14.6,18,14,18z M11,16h2V2h-2V16z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-pause-sm.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-pause-sm.svg");
    }
}
