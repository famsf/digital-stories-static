<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-audio-play-sm.svg */
class __TwigTemplate_c5d92d50f410f76bf2e3ea5a4e3046fa1ea921ed148359234291df95fbca4a1b extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15.13 18\"><defs><style>.cls-2,.cls-3{fill:none;stroke-width:1px;}.cls-2{stroke-linejoin:round;}.cls-3{stroke-miterlimit:10;}</style></defs><title>famsf-</title><path class=\"cls-1\" d=\"M9.37,4.47a4.22,4.22,0,0,0-7,3.39l.34,6a2.55,2.55,0,0,0,2.54,2.4h.15A2.53,2.53,0,0,0,7.3,15.14l2.89-5.35a4.22,4.22,0,0,0-.81-5.32Zm-.56,4A.51.51,0,0,1,8.3,8,1.74,1.74,0,0,0,4.82,8c0,1.46.36,1.74,1,1.74.16,0,.9.07,1.1.67s-.18,1.12-1.15,1.89a.51.51,0,0,1-.32.11.51.51,0,0,1-.32-.91,3.49,3.49,0,0,0,.75-.73H5.78c-2,0-2-2.08-2-2.76A2.76,2.76,0,0,1,9.32,8,.51.51,0,0,1,8.81,8.5Z\"/><path class=\"cls-2\" d=\"M12,7.31A5.5,5.5,0,0,0,6.57,2.12H6.25m-5,8.76.17,3a3.82,3.82,0,0,0,3.81,3.6h.22\"/><path class=\"cls-3\" d=\"M5.84.59a7.62,7.62,0,0,1,8,7.17\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-audio-play-sm.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 15.13 18\"><defs><style>.cls-2,.cls-3{fill:none;stroke-width:1px;}.cls-2{stroke-linejoin:round;}.cls-3{stroke-miterlimit:10;}</style></defs><title>famsf-</title><path class=\"cls-1\" d=\"M9.37,4.47a4.22,4.22,0,0,0-7,3.39l.34,6a2.55,2.55,0,0,0,2.54,2.4h.15A2.53,2.53,0,0,0,7.3,15.14l2.89-5.35a4.22,4.22,0,0,0-.81-5.32Zm-.56,4A.51.51,0,0,1,8.3,8,1.74,1.74,0,0,0,4.82,8c0,1.46.36,1.74,1,1.74.16,0,.9.07,1.1.67s-.18,1.12-1.15,1.89a.51.51,0,0,1-.32.11.51.51,0,0,1-.32-.91,3.49,3.49,0,0,0,.75-.73H5.78c-2,0-2-2.08-2-2.76A2.76,2.76,0,0,1,9.32,8,.51.51,0,0,1,8.81,8.5Z\"/><path class=\"cls-2\" d=\"M12,7.31A5.5,5.5,0,0,0,6.57,2.12H6.25m-5,8.76.17,3a3.82,3.82,0,0,0,3.81,3.6h.22\"/><path class=\"cls-3\" d=\"M5.84.59a7.62,7.62,0,0,1,8,7.17\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-audio-play-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-audio-play-sm.svg");
    }
}
