<?php

/* themes/custom/famsf_digital_stories_theme/templates/video-player-formatter.html.twig */
class __TwigTemplate_0aa6f497f1f72b9887c99654e7e20b55f2875a3ec23c500b6e8b9a0fd19cfa8a extends Twig_Template
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
        $tags = array("if" => 16, "for" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 16
        echo "<video preload=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "preload", array()), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "controls", array())) ? ("controls") : (""))));
        echo " style=\"";
        if (($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "width", array()) > 0)) {
            echo "width:";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "width", array()), "html", null, true));
            echo "px;";
        }
        if (($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "height", array()) > 0)) {
            echo "height:";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "height", array()), "html", null, true));
            echo "px;";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "autoplay", array())) ? ("autoplay") : (""))));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "loop", array())) ? ("loop") : (""))));
        echo " muted playsinline>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "        <source src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["user"], "html", null, true));
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</video>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/video-player-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 18,  65 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a formatted video field.
 *
 * Available variables:
 * - items: A collection of videos.
 * - player_attributes: Player options including the following:
 *   - width: The width of the video (if known).
 *   - height: The height of the video (if known).
 *   - autoplay: Autoplay on or off
 *
 * @ingroup themeable
 */
#}
<video preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }} style=\"{% if  player_attributes.width > 0 %}width:{{ player_attributes.width }}px;{% endif %}{% if  player_attributes.height > 0 %}height:{{ player_attributes.height }}px;{% endif %}\" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} muted playsinline>
    {% for user in items %}
        <source src=\"{{ user }}\"/>
    {% endfor %}
</video>
", "themes/custom/famsf_digital_stories_theme/templates/video-player-formatter.html.twig", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/web/themes/custom/famsf_digital_stories_theme/templates/video-player-formatter.html.twig");
    }
}
