<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-pause-sm.svg */
class __TwigTemplate_6e85851d25d7125c03946b3df909082a66c10676a05ce94185b2474e28cc2917 extends Twig_Template
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
", "themes/custom/famsf_digital_stories_theme/svg//famsf-pause-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/famsf-pause-sm.svg");
    }
}
