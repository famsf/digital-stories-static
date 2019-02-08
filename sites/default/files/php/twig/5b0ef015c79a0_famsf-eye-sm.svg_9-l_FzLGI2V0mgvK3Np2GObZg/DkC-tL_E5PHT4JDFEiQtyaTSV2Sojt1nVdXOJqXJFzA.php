<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-eye-sm.svg */
class __TwigTemplate_0bc1ec81c2b850075f7d50b77564b9763240025ec13a34dcb4392cc82448a548 extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 30.45 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M10,7a5.76,5.76,0,1,0,6.66-5.69q-.56-.05-1.14-.06A5.76,5.76,0,0,0,10,7Z\"/><path d=\"M20.44,2.09a6.78,6.78,0,1,1-8.76-.5A14.08,14.08,0,0,0,2,8.66c4.4,8,13.18,7.45,13.18,7.45,5.89,0,11-3.06,13.18-7.45A13.74,13.74,0,0,0,20.44,2.09Z\"/><path class=\"cls-2\" d=\"M15.58-.87m13.83,9A15,15,0,0,0,20.83.93M2.43,5.73A13.2,13.2,0,0,0,.87,8.1l-.29.58.31.57c4.23,7.7,12.3,8.09,13.88,8.09h.41\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-eye-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 30.45 18\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1px;}</style></defs><path d=\"M10,7a5.76,5.76,0,1,0,6.66-5.69q-.56-.05-1.14-.06A5.76,5.76,0,0,0,10,7Z\"/><path d=\"M20.44,2.09a6.78,6.78,0,1,1-8.76-.5A14.08,14.08,0,0,0,2,8.66c4.4,8,13.18,7.45,13.18,7.45,5.89,0,11-3.06,13.18-7.45A13.74,13.74,0,0,0,20.44,2.09Z\"/><path class=\"cls-2\" d=\"M15.58-.87m13.83,9A15,15,0,0,0,20.83.93M2.43,5.73A13.2,13.2,0,0,0,.87,8.1l-.29.58.31.57c4.23,7.7,12.3,8.09,13.88,8.09h.41\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-eye-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-eye-sm.svg");
    }
}
