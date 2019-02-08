<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-pause-sm.svg */
class __TwigTemplate_a932cc840599f120115daecf4a21808e1359841229b5f8c3e8f28d5f214fa686 extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15.05 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M13.55,16.39H10.16a.54.54,0,0,1-.54-.54V2.38a.54.54,0,0,1,.54-.54h3.39a.54.54,0,0,1,.54.54V15.85A.54.54,0,0,1,13.55,16.39Zm-7.6,0H2.56A.54.54,0,0,1,2,15.85V2.38a.54.54,0,0,1,.54-.54H6a.54.54,0,0,1,.54.54V15.85A.54.54,0,0,1,6,16.39Z\"/><path class=\"cls-2\" d=\"M8.56,2.38V15.85a1.61,1.61,0,0,0,1.61,1.61h3.39M6,.77H2.56A1.61,1.61,0,0,0,1,2.38v11\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-pause-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15.05 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M13.55,16.39H10.16a.54.54,0,0,1-.54-.54V2.38a.54.54,0,0,1,.54-.54h3.39a.54.54,0,0,1,.54.54V15.85A.54.54,0,0,1,13.55,16.39Zm-7.6,0H2.56A.54.54,0,0,1,2,15.85V2.38a.54.54,0,0,1,.54-.54H6a.54.54,0,0,1,.54.54V15.85A.54.54,0,0,1,6,16.39Z\"/><path class=\"cls-2\" d=\"M8.56,2.38V15.85a1.61,1.61,0,0,0,1.61,1.61h3.39M6,.77H2.56A1.61,1.61,0,0,0,1,2.38v11\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-pause-sm.svg", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/styleguide/src/includes/svg/deyoung/famsf-pause-sm.svg");
    }
}
