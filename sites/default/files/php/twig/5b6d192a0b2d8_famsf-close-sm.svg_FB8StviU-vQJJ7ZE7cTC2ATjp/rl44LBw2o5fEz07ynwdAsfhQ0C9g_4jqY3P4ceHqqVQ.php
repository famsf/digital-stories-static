<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-close-sm.svg */
class __TwigTemplate_88321c961d52fbd9cf330ca3bd693228efc0e994ad9bf506b2951b0f3f66ac24 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 18 18\" style=\"enable-background:new 0 0 18 18;\" xml:space=\"preserve\">
<path d=\"M4.6,17.3l-4-4L5,9L0.7,4.6l4-4L9,5l4.4-4.4l4,4L13,9l4.4,4.4l-4,4L9,13L4.6,17.3z M3.5,13.4l1.1,1.1L9,10.1l4.4,4.4
\tl1.1-1.1L10.1,9l4.4-4.4l-1.1-1.1L9,7.9L4.6,3.5L3.5,4.6L7.9,9L3.5,13.4z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-close-sm.svg";
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
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 18 18\" style=\"enable-background:new 0 0 18 18;\" xml:space=\"preserve\">
<path d=\"M4.6,17.3l-4-4L5,9L0.7,4.6l4-4L9,5l4.4-4.4l4,4L13,9l4.4,4.4l-4,4L9,13L4.6,17.3z M3.5,13.4l1.1,1.1L9,10.1l4.4,4.4
\tl1.1-1.1L10.1,9l4.4-4.4l-1.1-1.1L9,7.9L4.6,3.5L3.5,4.6L7.9,9L3.5,13.4z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-close-sm.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-close-sm.svg");
    }
}
