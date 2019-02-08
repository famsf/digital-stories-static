<?php

/* themes/custom/famsf_digital_stories_theme/svg/famsf-plus-sm.svg */
class __TwigTemplate_026ce3c8a0c30c40916204a30ff0a537bf01a213d048f3665dbf2acd6e838c59 extends Twig_Template
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
   viewBox=\"0 0 18 18\" style=\"enable-background:new 0 0 18 18;\" xml:space=\"preserve\">
<path d=\"M11.8,18H6.2v-6.2H0V6.2h6.2V0h5.6v6.2H18v5.6h-6.2V18z M8.2,16h1.6V9.8H16V8.2H9.8V2H8.2v6.2H2v1.6h6.2V16z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/famsf-plus-sm.svg";
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
   viewBox=\"0 0 18 18\" style=\"enable-background:new 0 0 18 18;\" xml:space=\"preserve\">
<path d=\"M11.8,18H6.2v-6.2H0V6.2h6.2V0h5.6v6.2H18v5.6h-6.2V18z M8.2,16h1.6V9.8H16V8.2H9.8V2H8.2v6.2H2v1.6h6.2V16z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg/famsf-plus-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/famsf-plus-sm.svg");
    }
}
