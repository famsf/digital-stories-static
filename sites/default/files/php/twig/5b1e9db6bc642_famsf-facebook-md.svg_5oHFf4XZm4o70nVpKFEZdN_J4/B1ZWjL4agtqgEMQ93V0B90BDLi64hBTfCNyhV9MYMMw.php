<?php

/* themes/custom/famsf_digital_stories_theme/svg/famsf-facebook-md.svg */
class __TwigTemplate_1c8d95cbf7673f831bd5b5efe739ed816ca36cad91b828d2a686b9af4b010725 extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 27 27\"><path d=\"M23.22,27H17.67a1,1,0,0,1-1-1V16.28a1,1,0,0,1,1-1h2L20,13.84H17.67a1,1,0,0,1-1-1V10.49a2.83,2.83,0,0,1,2.91-3h.66V5.88H18.73c-3.5,0-4.23,2.24-4.23,4.12v2.85a1,1,0,0,1-1,1H11.72v1.44H13.5a1,1,0,0,1,1,1V26a1,1,0,0,1-1,1H3.78A3.78,3.78,0,0,1,0,23.22V3.78A3.78,3.78,0,0,1,3.78,0H23.22A3.78,3.78,0,0,1,27,3.78V23.22A3.78,3.78,0,0,1,23.22,27Zm-4.56-2h4.56A1.78,1.78,0,0,0,25,23.22V3.78A1.78,1.78,0,0,0,23.22,2H3.78A1.78,1.78,0,0,0,2,3.78V23.22A1.78,1.78,0,0,0,3.78,25H12.5V17.28H10.72a1,1,0,0,1-1-1V12.84a1,1,0,0,1,1-1H12.5V10c0-3.77,2.39-6.12,6.23-6.12h2.51a1,1,0,0,1,1,1V8.5a1,1,0,0,1-1,1H19.57c-.6,0-.91.34-.91,1v1.35h2.57a1,1,0,0,1,1,1.22l-.79,3.44a1,1,0,0,1-1,.78H18.67Z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/famsf-facebook-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 27 27\"><path d=\"M23.22,27H17.67a1,1,0,0,1-1-1V16.28a1,1,0,0,1,1-1h2L20,13.84H17.67a1,1,0,0,1-1-1V10.49a2.83,2.83,0,0,1,2.91-3h.66V5.88H18.73c-3.5,0-4.23,2.24-4.23,4.12v2.85a1,1,0,0,1-1,1H11.72v1.44H13.5a1,1,0,0,1,1,1V26a1,1,0,0,1-1,1H3.78A3.78,3.78,0,0,1,0,23.22V3.78A3.78,3.78,0,0,1,3.78,0H23.22A3.78,3.78,0,0,1,27,3.78V23.22A3.78,3.78,0,0,1,23.22,27Zm-4.56-2h4.56A1.78,1.78,0,0,0,25,23.22V3.78A1.78,1.78,0,0,0,23.22,2H3.78A1.78,1.78,0,0,0,2,3.78V23.22A1.78,1.78,0,0,0,3.78,25H12.5V17.28H10.72a1,1,0,0,1-1-1V12.84a1,1,0,0,1,1-1H12.5V10c0-3.77,2.39-6.12,6.23-6.12h2.51a1,1,0,0,1,1,1V8.5a1,1,0,0,1-1,1H19.57c-.6,0-.91.34-.91,1v1.35h2.57a1,1,0,0,1,1,1.22l-.79,3.44a1,1,0,0,1-1,.78H18.67Z\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/famsf-facebook-md.svg", "/srv/bindings/11e3440f1e294ea6b8eef3da144fbeb9/code/styleguide/src/includes/svg/famsf-facebook-md.svg");
    }
}
