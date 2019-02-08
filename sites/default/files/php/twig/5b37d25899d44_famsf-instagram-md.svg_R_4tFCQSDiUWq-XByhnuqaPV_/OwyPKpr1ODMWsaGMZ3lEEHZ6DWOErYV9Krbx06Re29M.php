<?php

/* themes/custom/famsf_digital_stories_theme/svg/famsf-instagram-md.svg */
class __TwigTemplate_98c11c235122a860fdebd0e83f236f650a60f4f3ee94bf8c461cbef903550e8c extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 27 27\"><path d=\"M26.92,7.93a9.91,9.91,0,0,0-.63-3.28,6.62,6.62,0,0,0-1.56-2.39A6.62,6.62,0,0,0,22.34.71,9.91,9.91,0,0,0,19.07.08C17.63,0,17.17,0,13.5,0S9.37,0,7.93.08A9.91,9.91,0,0,0,4.66.71,6.62,6.62,0,0,0,2.27,2.27,6.62,6.62,0,0,0,.71,4.66,9.91,9.91,0,0,0,.08,7.93C0,9.37,0,9.83,0,13.5s0,4.13.08,5.57a9.91,9.91,0,0,0,.63,3.28,6.62,6.62,0,0,0,1.56,2.39,6.62,6.62,0,0,0,2.39,1.56,9.91,9.91,0,0,0,3.28.63c1.44.07,1.9.08,5.57.08s4.13,0,5.57-.08a9.91,9.91,0,0,0,3.28-.63,6.9,6.9,0,0,0,3.95-3.95,9.91,9.91,0,0,0,.63-3.28c.07-1.44.08-1.9.08-5.57S27,9.37,26.92,7.93ZM24.49,19A7.47,7.47,0,0,1,24,21.46,4.47,4.47,0,0,1,21.46,24a7.47,7.47,0,0,1-2.51.46c-1.42.06-1.85.08-5.46.08s-4,0-5.46-.08A7.47,7.47,0,0,1,5.54,24,4.18,4.18,0,0,1,4,23a4.18,4.18,0,0,1-1-1.55A7.47,7.47,0,0,1,2.51,19c-.06-1.42-.08-1.85-.08-5.46s0-4,.08-5.46A7.47,7.47,0,0,1,3,5.54,4.18,4.18,0,0,1,4,4,4.18,4.18,0,0,1,5.54,3,7.47,7.47,0,0,1,8,2.51c1.42-.06,1.85-.08,5.46-.08s4,0,5.46.08A7.47,7.47,0,0,1,21.46,3,4.18,4.18,0,0,1,23,4a4.18,4.18,0,0,1,1,1.55A7.47,7.47,0,0,1,24.49,8c.06,1.42.08,1.85.08,5.46S24.55,17.53,24.49,19ZM13.5,6.57a6.93,6.93,0,1,0,6.93,6.93A6.93,6.93,0,0,0,13.5,6.57ZM13.5,18A4.5,4.5,0,1,1,18,13.5,4.5,4.5,0,0,1,13.5,18ZM22.33,6.29a1.62,1.62,0,1,1-1.62-1.62h0A1.62,1.62,0,0,1,22.33,6.29Z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/famsf-instagram-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 27 27\"><path d=\"M26.92,7.93a9.91,9.91,0,0,0-.63-3.28,6.62,6.62,0,0,0-1.56-2.39A6.62,6.62,0,0,0,22.34.71,9.91,9.91,0,0,0,19.07.08C17.63,0,17.17,0,13.5,0S9.37,0,7.93.08A9.91,9.91,0,0,0,4.66.71,6.62,6.62,0,0,0,2.27,2.27,6.62,6.62,0,0,0,.71,4.66,9.91,9.91,0,0,0,.08,7.93C0,9.37,0,9.83,0,13.5s0,4.13.08,5.57a9.91,9.91,0,0,0,.63,3.28,6.62,6.62,0,0,0,1.56,2.39,6.62,6.62,0,0,0,2.39,1.56,9.91,9.91,0,0,0,3.28.63c1.44.07,1.9.08,5.57.08s4.13,0,5.57-.08a9.91,9.91,0,0,0,3.28-.63,6.9,6.9,0,0,0,3.95-3.95,9.91,9.91,0,0,0,.63-3.28c.07-1.44.08-1.9.08-5.57S27,9.37,26.92,7.93ZM24.49,19A7.47,7.47,0,0,1,24,21.46,4.47,4.47,0,0,1,21.46,24a7.47,7.47,0,0,1-2.51.46c-1.42.06-1.85.08-5.46.08s-4,0-5.46-.08A7.47,7.47,0,0,1,5.54,24,4.18,4.18,0,0,1,4,23a4.18,4.18,0,0,1-1-1.55A7.47,7.47,0,0,1,2.51,19c-.06-1.42-.08-1.85-.08-5.46s0-4,.08-5.46A7.47,7.47,0,0,1,3,5.54,4.18,4.18,0,0,1,4,4,4.18,4.18,0,0,1,5.54,3,7.47,7.47,0,0,1,8,2.51c1.42-.06,1.85-.08,5.46-.08s4,0,5.46.08A7.47,7.47,0,0,1,21.46,3,4.18,4.18,0,0,1,23,4a4.18,4.18,0,0,1,1,1.55A7.47,7.47,0,0,1,24.49,8c.06,1.42.08,1.85.08,5.46S24.55,17.53,24.49,19ZM13.5,6.57a6.93,6.93,0,1,0,6.93,6.93A6.93,6.93,0,0,0,13.5,6.57ZM13.5,18A4.5,4.5,0,1,1,18,13.5,4.5,4.5,0,0,1,13.5,18ZM22.33,6.29a1.62,1.62,0,1,1-1.62-1.62h0A1.62,1.62,0,0,1,22.33,6.29Z\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/famsf-instagram-md.svg", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/styleguide/src/includes/svg/famsf-instagram-md.svg");
    }
}
