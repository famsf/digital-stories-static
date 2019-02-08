<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-left-md.svg */
class __TwigTemplate_609dad334546779ddfa2e88e8bd962b70589eac1ef48f24903e7733a9beaf491 extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16.12 27\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}</style></defs><polygon points=\"7.6 12.69 13.7 6.38 13.7 0.08 1.51 12.69 13.7 25.31 13.7 19 7.6 12.69\"/><path class=\"cls-2\" d=\"M9.57,12.69l5.15-5.33.4-.41V.08M.49,13.68l4.1,4.24,8.09,8.38\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-left-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 16.12 27\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}</style></defs><polygon points=\"7.6 12.69 13.7 6.38 13.7 0.08 1.51 12.69 13.7 25.31 13.7 19 7.6 12.69\"/><path class=\"cls-2\" d=\"M9.57,12.69l5.15-5.33.4-.41V.08M.49,13.68l4.1,4.24,8.09,8.38\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-left-md.svg", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/styleguide/src/includes/svg/deyoung/famsf-caret-left-md.svg");
    }
}
