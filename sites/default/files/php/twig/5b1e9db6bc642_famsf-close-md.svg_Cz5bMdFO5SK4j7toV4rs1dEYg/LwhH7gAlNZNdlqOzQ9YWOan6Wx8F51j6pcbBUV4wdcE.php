<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-close-md.svg */
class __TwigTemplate_5e60b76f9eb356d12b1cecf6139651a0fb080d21d89e1e77cd319940c05aa644 extends Twig_Template
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
\t viewBox=\"0 0 29 29\" style=\"enable-background:new 0 0 29 29;\" xml:space=\"preserve\">
<path d=\"M7.1,27.6l-5.7-5.7l7.4-7.4L1.4,7.1l5.7-5.7l7.4,7.4l7.4-7.4l5.7,5.7l-7.4,7.4l7.4,7.4l-5.7,5.7l-7.4-7.4L7.1,27.6z
\t M4.2,21.9l2.8,2.8l7.4-7.4l7.4,7.4l2.8-2.8l-7.4-7.4l7.4-7.4l-2.8-2.8l-7.4,7.4L7.1,4.2L4.2,7.1l7.4,7.4L4.2,21.9z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-close-md.svg";
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
\t viewBox=\"0 0 29 29\" style=\"enable-background:new 0 0 29 29;\" xml:space=\"preserve\">
<path d=\"M7.1,27.6l-5.7-5.7l7.4-7.4L1.4,7.1l5.7-5.7l7.4,7.4l7.4-7.4l5.7,5.7l-7.4,7.4l7.4,7.4l-5.7,5.7l-7.4-7.4L7.1,27.6z
\t M4.2,21.9l2.8,2.8l7.4-7.4l7.4,7.4l2.8-2.8l-7.4-7.4l7.4-7.4l-2.8-2.8l-7.4,7.4L7.1,4.2L4.2,7.1l7.4,7.4L4.2,21.9z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-close-md.svg", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/styleguide/src/includes/svg/famsf-close-md.svg");
    }
}
