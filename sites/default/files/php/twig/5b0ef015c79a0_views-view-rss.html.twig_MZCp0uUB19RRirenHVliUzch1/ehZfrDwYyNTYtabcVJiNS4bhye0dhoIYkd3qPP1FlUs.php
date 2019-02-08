<?php

/* core/themes/stable/templates/views/views-view-rss.html.twig */
class __TwigTemplate_a8bf3ab693b0c650ab520ad07544293fa8c57094c4350f0c7147a5fe702024be extends Twig_Template
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

        // line 18
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xml:base=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["namespaces"]) ? $context["namespaces"] : null), "html", null, true));
        echo ">
  <channel>
    <title>";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
    <link>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</link>
    <description>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
        echo "</description>
    <language>";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true));
        echo "</language>
    ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["channel_elements"]) ? $context["channel_elements"] : null), "html", null, true));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true));
        echo "
  </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/views/views-view-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  46 => 19,  43 => 18,);
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
 * Theme override for feed displays that use the RSS style.
 *
 * Available variables:
 * - link: The link to the feed (the view path).
 * - namespaces: The XML namespaces (added automatically).
 * - title: The title of the feed (as set in the view).
 * - description: The feed description (from feed settings).
 * - langcode: The language encoding.
 * - channel_elements: The formatted channel elements.
 * - items: The feed items themselves.
 *
 * @see template_preprocess_views_view_rss()
 */
#}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xml:base=\"{{ link }}\"{{ namespaces }}>
  <channel>
    <title>{{ title }}</title>
    <link>{{ link }}</link>
    <description>{{ description }}</description>
    <language>{{ langcode }}</language>
    {{ channel_elements }}
    {{ items }}
  </channel>
</rss>
", "core/themes/stable/templates/views/views-view-rss.html.twig", "/srv/bindings/280b5ef26e1145db8cef29366c7afba0/code/web/core/themes/stable/templates/views/views-view-rss.html.twig");
    }
}
