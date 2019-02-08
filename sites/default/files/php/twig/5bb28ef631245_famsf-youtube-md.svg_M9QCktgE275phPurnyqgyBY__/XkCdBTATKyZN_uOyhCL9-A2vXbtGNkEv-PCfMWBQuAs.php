<?php

/* themes/custom/famsf_digital_stories_theme/svg/famsf-youtube-md.svg */
class __TwigTemplate_b7178d03fa8533a281c5243a52533b660acfe9fb59eb97724ec9ecc97443adba extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 34.47 27\"><path d=\"M17.23,27C1.06,27,0,25.3,0,13.5S1.06,0,17.23,0,34.47,1.7,34.47,13.5,33.4,27,17.23,27Zm0-25C2,2,2,2.87,2,13.5S2,25,17.23,25s15.23-.87,15.23-11.5S32.47,2,17.23,2ZM14.7,18.55a1.67,1.67,0,0,1-.91-.26A1.83,1.83,0,0,1,13,16.7V10.3a1.75,1.75,0,0,1,2.58-1.65l7.29,3.4a1.52,1.52,0,0,1,0,2.9h0l-7.29,3.4A2.08,2.08,0,0,1,14.7,18.55Zm.29-8v5.83l6.24-2.91ZM22.44,14h0Z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/famsf-youtube-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 34.47 27\"><path d=\"M17.23,27C1.06,27,0,25.3,0,13.5S1.06,0,17.23,0,34.47,1.7,34.47,13.5,33.4,27,17.23,27Zm0-25C2,2,2,2.87,2,13.5S2,25,17.23,25s15.23-.87,15.23-11.5S32.47,2,17.23,2ZM14.7,18.55a1.67,1.67,0,0,1-.91-.26A1.83,1.83,0,0,1,13,16.7V10.3a1.75,1.75,0,0,1,2.58-1.65l7.29,3.4a1.52,1.52,0,0,1,0,2.9h0l-7.29,3.4A2.08,2.08,0,0,1,14.7,18.55Zm.29-8v5.83l6.24-2.91ZM22.44,14h0Z\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/famsf-youtube-md.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-youtube-md.svg");
    }
}
