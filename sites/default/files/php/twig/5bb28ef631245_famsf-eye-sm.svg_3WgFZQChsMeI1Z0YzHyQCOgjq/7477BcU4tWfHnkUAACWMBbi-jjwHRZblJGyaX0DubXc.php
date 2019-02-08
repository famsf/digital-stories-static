<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-eye-sm.svg */
class __TwigTemplate_7f60b9773af5dd065dc8bc9b23e13559e2bd3d5c22d331bd28fc50c64ef0ba24 extends Twig_Template
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
   viewBox=\"0 0 30.4 18\" style=\"enable-background:new 0 0 30.4 18;\" xml:space=\"preserve\">
<path d=\"M30.2,8.5c-2.4-4.7-7.5-7.9-13.3-8.5C16.6,0,16.2,0,15.8,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.3,0-0.4,0
  C8.7,0,2.8,3.4,0.1,8.5C-0.1,9,0.1,9.6,0.5,9.9C1,10.1,1.6,9.9,1.9,9.5c1.6-3.2,4.6-5.5,8.3-6.7C9.2,4,8.6,5.5,8.6,7.2
  c0,4,3.2,7.2,7.2,7.2S23,11.2,23,7.2c0-1.4-0.4-2.6-1.1-3.7c2.7,1.2,4.9,3.1,6.2,5.5c-2.4,4.3-7.5,7-13,7c-0.6,0-1,0.4-1,1
  s0.4,1,1,1c6.5,0,12.4-3.4,15.1-8.5L30.4,9L30.2,8.5z M21,7.2c0,2.9-2.3,5.2-5.2,5.2s-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5-5.2
  c0.1,0,0.3,0,0.4,0C18.8,2.2,21,4.4,21,7.2z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-eye-sm.svg";
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
   viewBox=\"0 0 30.4 18\" style=\"enable-background:new 0 0 30.4 18;\" xml:space=\"preserve\">
<path d=\"M30.2,8.5c-2.4-4.7-7.5-7.9-13.3-8.5C16.6,0,16.2,0,15.8,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.3,0-0.4,0
  C8.7,0,2.8,3.4,0.1,8.5C-0.1,9,0.1,9.6,0.5,9.9C1,10.1,1.6,9.9,1.9,9.5c1.6-3.2,4.6-5.5,8.3-6.7C9.2,4,8.6,5.5,8.6,7.2
  c0,4,3.2,7.2,7.2,7.2S23,11.2,23,7.2c0-1.4-0.4-2.6-1.1-3.7c2.7,1.2,4.9,3.1,6.2,5.5c-2.4,4.3-7.5,7-13,7c-0.6,0-1,0.4-1,1
  s0.4,1,1,1c6.5,0,12.4-3.4,15.1-8.5L30.4,9L30.2,8.5z M21,7.2c0,2.9-2.3,5.2-5.2,5.2s-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5-5.2
  c0.1,0,0.3,0,0.4,0C18.8,2.2,21,4.4,21,7.2z\"/>
</svg>
", "themes/custom/famsf_digital_stories_theme/svg//famsf-eye-sm.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/famsf-eye-sm.svg");
    }
}
