<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-caret-right-md.svg */
class __TwigTemplate_fffff0d291ff6e9b9d0d7255fcd6937b9871912b041fc2b6ab9afacc4480f195 extends Twig_Template
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
        echo "<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 14.1 27\" style=\"enable-background:new 0 0 14.1 27;\" xml:space=\"preserve\">
<path d=\"M1,27c-0.1,0-0.3,0-0.4-0.1C0.2,26.8,0,26.4,0,26v-6.2c0-0.3,0.1-0.5,0.3-0.7l5.4-5.6L0.3,7.9
\tC0.1,7.8,0,7.5,0,7.2V1c0-0.6,0.5-1,1-1c0.3,0,0.5,0.1,0.7,0.3l12.1,12.5c0.4,0.4,0.4,1,0,1.4L1.7,26.7C1.5,26.9,1.3,27,1,27z
\t M2,20.1v3.4l9.7-10L2,3.5v3.4l5.8,6c0.4,0.4,0.4,1,0,1.4L2,20.1z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-right-md.svg";
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
        return new Twig_Source("<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 14.1 27\" style=\"enable-background:new 0 0 14.1 27;\" xml:space=\"preserve\">
<path d=\"M1,27c-0.1,0-0.3,0-0.4-0.1C0.2,26.8,0,26.4,0,26v-6.2c0-0.3,0.1-0.5,0.3-0.7l5.4-5.6L0.3,7.9
\tC0.1,7.8,0,7.5,0,7.2V1c0-0.6,0.5-1,1-1c0.3,0,0.5,0.1,0.7,0.3l12.1,12.5c0.4,0.4,0.4,1,0,1.4L1.7,26.7C1.5,26.9,1.3,27,1,27z
\t M2,20.1v3.4l9.7-10L2,3.5v3.4l5.8,6c0.4,0.4,0.4,1,0,1.4L2,20.1z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-right-md.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-caret-right-md.svg");
    }
}
