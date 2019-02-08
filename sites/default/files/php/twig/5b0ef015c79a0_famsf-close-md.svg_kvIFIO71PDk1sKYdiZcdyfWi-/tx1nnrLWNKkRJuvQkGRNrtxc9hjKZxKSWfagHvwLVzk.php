<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-md.svg */
class __TwigTemplate_9567dfe97cc5fb341816465f773634899f849a78b42a349ae2ef805ffdbba498 extends Twig_Template
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
<style type=\"text/css\">
\t.st0{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}
</style>
<polygon points=\"26.1,21.2 19.5,14.5 26.1,7.9 21.2,2.9 14.5,9.5 7.8,2.9 2.9,7.9 9.5,14.5 2.9,21.2 7.8,26.2 14.5,19.5 21.2,26.2 
\t\"/>
<polyline class=\"st0\" points=\"7.8,28.4 14.5,21.7 21.2,28.4 \"/>
<polyline class=\"st0\" points=\"21.2,0.6 14.5,7.3 7.8,0.6 \"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-md.svg";
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
<style type=\"text/css\">
\t.st0{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}
</style>
<polygon points=\"26.1,21.2 19.5,14.5 26.1,7.9 21.2,2.9 14.5,9.5 7.8,2.9 2.9,7.9 9.5,14.5 2.9,21.2 7.8,26.2 14.5,19.5 21.2,26.2 
\t\"/>
<polyline class=\"st0\" points=\"7.8,28.4 14.5,21.7 21.2,28.4 \"/>
<polyline class=\"st0\" points=\"21.2,0.6 14.5,7.3 7.8,0.6 \"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-close-md.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-close-md.svg");
    }
}
