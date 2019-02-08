<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-md.svg */
class __TwigTemplate_0fc699fc44315b9a5175cb0c9c9412e562a44b42e007537dbbca07c8357a4620 extends Twig_Template
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
\t viewBox=\"0 0 33.4 27\" style=\"enable-background:new 0 0 33.4 27;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:none;stroke-width:1.5;stroke-miterlimit:10;}
</style>
<path d=\"M29.2,7.4H3.4V3.2h25.8V7.4z\"/>
<path d=\"M29.2,15.5H3.4v-4.2h25.8V15.5z\"/>
<path d=\"M29.2,23.7H3.4v-4.3h25.8V23.7z\"/>
<polyline class=\"st0\" points=\"28.8,25.7 31.2,25.7 31.2,17.6 21.8,17.6 \"/>
<polyline class=\"st0\" points=\"21.7,1.2 1,1.2 1,6.2 \"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-md.svg";
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
\t viewBox=\"0 0 33.4 27\" style=\"enable-background:new 0 0 33.4 27;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:none;stroke-width:1.5;stroke-miterlimit:10;}
</style>
<path d=\"M29.2,7.4H3.4V3.2h25.8V7.4z\"/>
<path d=\"M29.2,15.5H3.4v-4.2h25.8V15.5z\"/>
<path d=\"M29.2,23.7H3.4v-4.3h25.8V23.7z\"/>
<polyline class=\"st0\" points=\"28.8,25.7 31.2,25.7 31.2,17.6 21.8,17.6 \"/>
<polyline class=\"st0\" points=\"21.7,1.2 1,1.2 1,6.2 \"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-hamburger-md.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/deyoung/famsf-hamburger-md.svg");
    }
}
