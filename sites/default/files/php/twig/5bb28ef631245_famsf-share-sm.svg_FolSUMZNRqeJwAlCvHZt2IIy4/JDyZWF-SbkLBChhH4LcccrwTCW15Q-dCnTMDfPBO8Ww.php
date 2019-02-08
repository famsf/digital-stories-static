<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-share-sm.svg */
class __TwigTemplate_260ea6f20bc1a5f2a628b12f669a7db56d83c0e180f58c3c0364aa3f02dfdb80 extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16.33 17.68\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M12.34,12.32a2,2,0,0,0-1.37.54L6,10A1.93,1.93,0,0,0,6,9l4.91-2.86a2.08,2.08,0,1,0-.67-1.52,2,2,0,0,0,.06.49L5.41,7.95a2.09,2.09,0,1,0,0,3l5,2.89a2,2,0,0,0-.06.46,2,2,0,1,0,2-2Z\"/><path class=\"cls-2\" d=\"M15.62,4.59A3.29,3.29,0,0,0,12.34,1.3h0A3.29,3.29,0,0,0,9.06,4.42m-8.36,5a3.28,3.28,0,0,0,4.75,2.93l3.67,2.14\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-share-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16.33 17.68\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M12.34,12.32a2,2,0,0,0-1.37.54L6,10A1.93,1.93,0,0,0,6,9l4.91-2.86a2.08,2.08,0,1,0-.67-1.52,2,2,0,0,0,.06.49L5.41,7.95a2.09,2.09,0,1,0,0,3l5,2.89a2,2,0,0,0-.06.46,2,2,0,1,0,2-2Z\"/><path class=\"cls-2\" d=\"M15.62,4.59A3.29,3.29,0,0,0,12.34,1.3h0A3.29,3.29,0,0,0,9.06,4.42m-8.36,5a3.28,3.28,0,0,0,4.75,2.93l3.67,2.14\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-share-sm.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/deyoung/famsf-share-sm.svg");
    }
}
