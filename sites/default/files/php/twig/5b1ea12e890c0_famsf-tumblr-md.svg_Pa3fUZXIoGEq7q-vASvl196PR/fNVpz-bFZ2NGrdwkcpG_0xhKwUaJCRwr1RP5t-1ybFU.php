<?php

/* themes/custom/famsf_digital_stories_theme/svg/famsf-tumblr-md.svg */
class __TwigTemplate_ff643fc22f86b17addac38bf6186a035e2d0bcc9b6e40ee83c36ac813c38eb9b extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18 27\"><path d=\"M9.85,2V7.81h5.39v3.61H9.85v5.9a9.48,9.48,0,0,0,.21,2.57,1.74,1.74,0,0,0,.78.91,3.27,3.27,0,0,0,1.73.46A6.16,6.16,0,0,0,16,20.12v3.62a13.49,13.49,0,0,1-2.64,1,11.15,11.15,0,0,1-2.55.28,8.78,8.78,0,0,1-2.76-.4,6,6,0,0,1-2-1.14A4.13,4.13,0,0,1,4.84,21.9a6.89,6.89,0,0,1-.33-2.41V11.42H2V8.17A6.61,6.61,0,0,0,4.29,6.91a6.3,6.3,0,0,0,1.53-2A9,9,0,0,0,6.62,2H9.85m0-2H6.62a2,2,0,0,0-2,1.76A7.14,7.14,0,0,1,4,4,4.28,4.28,0,0,1,3,5.39a4.6,4.6,0,0,1-1.61.88A2,2,0,0,0,0,8.17v3.26a2,2,0,0,0,2,2h.51v6.07A8.67,8.67,0,0,0,3,22.63,6.12,6.12,0,0,0,4.69,25,8,8,0,0,0,7.42,26.5a10.81,10.81,0,0,0,3.39.5,13.2,13.2,0,0,0,3-.33,15.53,15.53,0,0,0,3-1.12A2,2,0,0,0,18,23.74V20.12a2,2,0,0,0-3.11-1.67,4.18,4.18,0,0,1-2.33.8,1.32,1.32,0,0,1-.63-.14,13.68,13.68,0,0,1-.08-1.8v-3.9h3.39a2,2,0,0,0,2-2V7.81a2,2,0,0,0-2-2H11.85V2a2,2,0,0,0-2-2Z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/famsf-tumblr-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18 27\"><path d=\"M9.85,2V7.81h5.39v3.61H9.85v5.9a9.48,9.48,0,0,0,.21,2.57,1.74,1.74,0,0,0,.78.91,3.27,3.27,0,0,0,1.73.46A6.16,6.16,0,0,0,16,20.12v3.62a13.49,13.49,0,0,1-2.64,1,11.15,11.15,0,0,1-2.55.28,8.78,8.78,0,0,1-2.76-.4,6,6,0,0,1-2-1.14A4.13,4.13,0,0,1,4.84,21.9a6.89,6.89,0,0,1-.33-2.41V11.42H2V8.17A6.61,6.61,0,0,0,4.29,6.91a6.3,6.3,0,0,0,1.53-2A9,9,0,0,0,6.62,2H9.85m0-2H6.62a2,2,0,0,0-2,1.76A7.14,7.14,0,0,1,4,4,4.28,4.28,0,0,1,3,5.39a4.6,4.6,0,0,1-1.61.88A2,2,0,0,0,0,8.17v3.26a2,2,0,0,0,2,2h.51v6.07A8.67,8.67,0,0,0,3,22.63,6.12,6.12,0,0,0,4.69,25,8,8,0,0,0,7.42,26.5a10.81,10.81,0,0,0,3.39.5,13.2,13.2,0,0,0,3-.33,15.53,15.53,0,0,0,3-1.12A2,2,0,0,0,18,23.74V20.12a2,2,0,0,0-3.11-1.67,4.18,4.18,0,0,1-2.33.8,1.32,1.32,0,0,1-.63-.14,13.68,13.68,0,0,1-.08-1.8v-3.9h3.39a2,2,0,0,0,2-2V7.81a2,2,0,0,0-2-2H11.85V2a2,2,0,0,0-2-2Z\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/famsf-tumblr-md.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/famsf-tumblr-md.svg");
    }
}
