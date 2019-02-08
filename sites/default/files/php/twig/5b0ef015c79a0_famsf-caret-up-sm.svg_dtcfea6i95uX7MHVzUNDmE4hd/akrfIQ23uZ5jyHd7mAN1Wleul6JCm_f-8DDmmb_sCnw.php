<?php

/* themes/custom/famsf_digital_stories_theme/svg//famsf-caret-up-sm.svg */
class __TwigTemplate_beb3ce220a5bd97b4d07c5949ba05280745996532b93136d7817b458e81860ea extends Twig_Template
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
   viewBox=\"0 0 35.1 18\" style=\"enable-background:new 0 0 35.1 18;\" xml:space=\"preserve\">
<g>
  <path d=\"M34.1,18h-8.3c-0.3,0-0.5-0.1-0.7-0.3l-7.5-7.3L10,17.7C9.8,17.9,9.6,18,9.3,18H1c-0.4,0-0.8-0.2-0.9-0.6
    C-0.1,17,0,16.6,0.3,16.3l16.6-16c0.4-0.4,1-0.4,1.4,0l16.5,16c0.3,0.3,0.4,0.7,0.2,1.1C34.9,17.8,34.5,18,34.1,18z M26.2,16h5.4
    l-14-13.6L3.5,16h5.4l8-7.7c0.4-0.4,1-0.4,1.4,0L26.2,16z\"/>
</g>
</svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-up-sm.svg";
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
   viewBox=\"0 0 35.1 18\" style=\"enable-background:new 0 0 35.1 18;\" xml:space=\"preserve\">
<g>
  <path d=\"M34.1,18h-8.3c-0.3,0-0.5-0.1-0.7-0.3l-7.5-7.3L10,17.7C9.8,17.9,9.6,18,9.3,18H1c-0.4,0-0.8-0.2-0.9-0.6
    C-0.1,17,0,16.6,0.3,16.3l16.6-16c0.4-0.4,1-0.4,1.4,0l16.5,16c0.3,0.3,0.4,0.7,0.2,1.1C34.9,17.8,34.5,18,34.1,18z M26.2,16h5.4
    l-14-13.6L3.5,16h5.4l8-7.7c0.4-0.4,1-0.4,1.4,0L26.2,16z\"/>
</g>
</svg>", "themes/custom/famsf_digital_stories_theme/svg//famsf-caret-up-sm.svg", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/styleguide/src/includes/svg/famsf-caret-up-sm.svg");
    }
}
