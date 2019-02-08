<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-sm.svg */
class __TwigTemplate_29b9a8d6c777206eb5656122cf58aceed6be42f6248db7aa1122d86ddcc4f0ce extends Twig_Template
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
<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 18.8 15.3\" style=\"enable-background:new 0 0 18.8 15.3;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:none;stroke-width:1;stroke-miterlimit:10;}
</style>
<path d=\"M16.5,4.4H2.5V2.1h14.1V4.4z\"/>
<path d=\"M16.5,8.8H2.5V6.5h14.1V8.8z\"/>
<path d=\"M16.5,13.3H2.5v-2.3h14.1V13.3z\"/>
<polyline class=\"st0\" points=\"16.3,14.4 17.7,14.4 17.7,10 12.5,10 \"/>
<polyline class=\"st0\" points=\"12.4,1 1.2,1 1.2,3.7 \"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-sm.svg";
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
<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 18.8 15.3\" style=\"enable-background:new 0 0 18.8 15.3;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:none;stroke-width:1;stroke-miterlimit:10;}
</style>
<path d=\"M16.5,4.4H2.5V2.1h14.1V4.4z\"/>
<path d=\"M16.5,8.8H2.5V6.5h14.1V8.8z\"/>
<path d=\"M16.5,13.3H2.5v-2.3h14.1V13.3z\"/>
<polyline class=\"st0\" points=\"16.3,14.4 17.7,14.4 17.7,10 12.5,10 \"/>
<polyline class=\"st0\" points=\"12.4,1 1.2,1 1.2,3.7 \"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-hamburger-sm.svg");
    }
}
