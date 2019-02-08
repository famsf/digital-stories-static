<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-up-sm.svg */
class __TwigTemplate_032d573e6bb5696ac3ac582261424f9c6a6fdc51a8470cd899c346cdd31b5d5f extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 35.13 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><polygon points=\"17.56 9.2 24.12 15.53 30.67 15.53 17.56 2.87 4.46 15.53 11.01 15.53 17.56 9.2\"/><path class=\"cls-2\" d=\"M29.05,11.93,18.58,1.82l-1-1h0l-1,1M4.46,17H11.6l.43-.41,5.53-5.34,2.59,2.5\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-up-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 35.13 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><polygon points=\"17.56 9.2 24.12 15.53 30.67 15.53 17.56 2.87 4.46 15.53 11.01 15.53 17.56 9.2\"/><path class=\"cls-2\" d=\"M29.05,11.93,18.58,1.82l-1-1h0l-1,1M4.46,17H11.6l.43-.41,5.53-5.34,2.59,2.5\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-up-sm.svg", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/styleguide/src/includes/svg/deyoung/famsf-caret-up-sm.svg");
    }
}
