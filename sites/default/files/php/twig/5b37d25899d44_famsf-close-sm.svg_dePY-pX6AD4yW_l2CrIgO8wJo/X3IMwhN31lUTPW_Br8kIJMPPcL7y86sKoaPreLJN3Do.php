<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-sm.svg */
class __TwigTemplate_50ccb64bb35b32f95ab6a0224fa1a33199db1aae8743483af2ced99ef95656ad extends Twig_Template
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
<style type=\"text/css\">
\t.st0{fill:none;stroke-miterlimit:10;stroke-width:1px;}
</style>
<polygon points=\"16.2,13.1 12.1,9 16.2,4.9 13.1,1.8 9,5.9 4.9,1.8 1.8,4.9 5.9,9 1.8,13.1 4.9,16.2 9,12.1 13.1,16.2 \"/>
<polyline class=\"st0\" points=\"4.9,17.6 9,13.5 13.1,17.6 \"/>
<polyline class=\"st0\" points=\"13.1,0.4 9,4.5 4.9,0.4 \"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-sm.svg";
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
<style type=\"text/css\">
\t.st0{fill:none;stroke-miterlimit:10;stroke-width:1px;}
</style>
<polygon points=\"16.2,13.1 12.1,9 16.2,4.9 13.1,1.8 9,5.9 4.9,1.8 1.8,4.9 5.9,9 1.8,13.1 4.9,16.2 9,12.1 13.1,16.2 \"/>
<polyline class=\"st0\" points=\"4.9,17.6 9,13.5 13.1,17.6 \"/>
<polyline class=\"st0\" points=\"13.1,0.4 9,4.5 4.9,0.4 \"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-sm.svg", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/styleguide/src/includes/svg/deyoung/famsf-close-sm.svg");
    }
}
