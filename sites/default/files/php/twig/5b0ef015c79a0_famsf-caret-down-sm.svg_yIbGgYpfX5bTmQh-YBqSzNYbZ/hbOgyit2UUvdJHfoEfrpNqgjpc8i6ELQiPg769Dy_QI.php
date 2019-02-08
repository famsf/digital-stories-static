<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-down-sm.svg */
class __TwigTemplate_0c275669b987addb4aba52db8b2ac7fdd609a19df9ff25e8a64ed5d3b9a9d38a extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 35.13 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><polygon points=\"16.99 9.23 9.58 2.08 2.17 2.08 16.99 16.39 31.81 2.08 24.4 2.08 16.99 9.23\"/><path class=\"cls-2\" d=\"M17,6.93l-6.26-6L10.25.42H2.17m16,17.17,5-4.81L33,3.27\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-down-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 35.13 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><polygon points=\"16.99 9.23 9.58 2.08 2.17 2.08 16.99 16.39 31.81 2.08 24.4 2.08 16.99 9.23\"/><path class=\"cls-2\" d=\"M17,6.93l-6.26-6L10.25.42H2.17m16,17.17,5-4.81L33,3.27\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-down-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-caret-down-sm.svg");
    }
}
