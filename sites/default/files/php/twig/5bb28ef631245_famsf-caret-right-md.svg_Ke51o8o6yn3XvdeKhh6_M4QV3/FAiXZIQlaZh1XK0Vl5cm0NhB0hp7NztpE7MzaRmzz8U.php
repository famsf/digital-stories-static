<?php

/* themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-right-md.svg */
class __TwigTemplate_17d9411b2213d6a0c798edf952ef84b009c56353e196d03d63bf376626161e4b extends Twig_Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18.61 27\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}</style></defs><polygon points=\"9.03 13.5 2.91 19.83 2.91 26.17 15.15 13.5 2.91 0.83 2.91 7.17 9.03 13.5\"/><path class=\"cls-2\" d=\"M6.39,24.61l9.77-10.12,1-1h0l-1-1M1.49.83V7.74l.4.41L7.06,13.5,4.64,16\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-right-md.svg";
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
        return new Twig_Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 18.61 27\"><defs><style>.cls-2{fill:none;stroke-miterlimit:10;stroke-width:1.5px;}</style></defs><polygon points=\"9.03 13.5 2.91 19.83 2.91 26.17 15.15 13.5 2.91 0.83 2.91 7.17 9.03 13.5\"/><path class=\"cls-2\" d=\"M6.39,24.61l9.77-10.12,1-1h0l-1-1M1.49.83V7.74l.4.41L7.06,13.5,4.64,16\"/></svg>
", "themes/custom/famsf_digital_stories_theme/svg/deyoung/famsf-caret-right-md.svg", "/srv/bindings/fe45c127f3164cef999e1acf3054ae33/code/styleguide/src/includes/svg/deyoung/famsf-caret-right-md.svg");
    }
}
