<?php

/* themes/custom/famsf_digital_stories_theme/templates/page/page--digital-story.html.twig */
class __TwigTemplate_15e8fd5c00cb7c6e8a71ff868b2109184353932bc9b872e6ef8114a1d679ca30 extends Twig_Template
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
        $tags = array("if" => 71, "for" => 76, "set" => 77);
        $filters = array("raw" => 72, "clean_id" => 77, "trim" => 77, "striptags" => 88);
        $functions = array("include" => 51, "active_theme_path" => 51, "file_url" => 101);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('raw', 'clean_id', 'trim', 'striptags'),
                array('include', 'active_theme_path', 'file_url')
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

        // line 39
        echo "
";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_nav", array()), "html", null, true));
        echo "

<div class=\"js-loading loading\">
  <div class=\"loader\">
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
  </div>
</div>
<a href=\"#\" class=\"dashboard-toggle js-dashboard-toggle js-closed button-with-icon\">
  <i class=\"icon--med\">";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-hamburger-md.svg"))));
        echo "</i>
  <i class=\"icon--small\">";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-hamburger-sm.svg"))));
        echo "</i>
</a>
<div class=\"dashboard js-dashboard js-closed\">
  <nav>
    <div class=\"dashboard-header\">
      <div class=\"container\">
        <div class=\"l-1up\">
          <a href=\"#\" class=\"dashboard-close js-dashboard-close button-with-icon\">
            <div>Close</div>
            <i class=\"icon--med\">";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-close-md.svg"))));
        echo "</i>
            <i class=\"icon--small\">";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-close-sm.svg"))));
        echo "</i>
          </a>
        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"l-1up\">

        ";
        // line 71
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_alternate_menu", array()), "value", array()))) {
            // line 72
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_alternate_menu", array()), "value", array())));
            echo "
        ";
        } else {
            // line 74
            echo "        <ul class=\"dashboard__nav-list\" id=\"myMenu\">
          <li class=\"dashboard__nav-item active\" data-menuanchor=\"start\"><a href=\"#start\">Start</a></li>
          ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sectionTitles"]) ? $context["sectionTitles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 77
                echo "          ";
                $context["sectionId"] = \Drupal\Component\Utility\Html::getId(twig_trim_filter($context["section"]));
                // line 78
                echo "          <li class=\"dashboard__nav-item\" data-menuanchor=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sectionId"]) ? $context["sectionId"] : null), "html", null, true));
                echo "\"><a href=\"#";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sectionId"]) ? $context["sectionId"] : null), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["section"], "html", null, true));
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </ul>
        ";
        }
        // line 82
        echo "      </div>
    </div>
  </nav>
  <section class=\"dashboard-section\">
    <div class=\"container\">
      <div class=\"l-1up\">
        ";
        // line 88
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_non_member_ticket_link", array()), "uri", array()))))) {
            // line 89
            echo "        <a class=\"color-block-button--full\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_non_member_ticket_link", array()), "uri", array()), "html", null, true));
            echo "\">Tickets</a>
        ";
        }
        // line 91
        echo "        ";
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_member_ticket_link", array()), "uri", array()))))) {
            // line 92
            echo "        <a class=\"color-block-button--full\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_member_ticket_link", array()), "uri", array()), "html", null, true));
            echo "\">Member Tickets</a>
        ";
        }
        // line 94
        echo "      </div>
   </div>
    <div class=\"container\">
      <div class=\"l-2up\">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_link", array()), "uri", array()))) {
            // line 99
            echo "        <a class=\"footer-link\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_link", array()), "uri", array()), "html", null, true));
            echo "\">
          ";
            // line 100
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_photo", array()), "entity", array()), "fileuri", array()))) {
                // line 101
                echo "          <img data-src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_photo", array()), "entity", array()), "fileuri", array()))), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_photo", array()), "entity", array()), "alt", array()), "html", null, true));
                echo "\">
          ";
            }
            // line 103
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_title", array()), "value", array()), "html", null, true));
            echo "
        </a>
        ";
        }
        // line 106
        echo "      </div>
      <div class=\"l-2up\">
        ";
        // line 108
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_digital_story_link", array()), "uri", array()))) {
            // line 109
            echo "        <a class=\"footer-link\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_digital_story_link", array()), "uri", array()), "html", null, true));
            echo "\">
          ";
            // line 110
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_digital_story_image", array()), "entity", array()), "fileuri", array()))) {
                // line 111
                echo "          <img data-src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_digital_story_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_store_item_photo", array()), "entity", array()), "alt", array()), "html", null, true));
                echo "\">
          ";
            }
            // line 113
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_digital_story_title", array()), "value", array()), "html", null, true));
            echo "
        </a>
        ";
        }
        // line 116
        echo "      </div>
    </div>
  </section>

</div>
<div class=\"dashboard-overlay-background js-dashboard-overlay-background\" style=\"display: none;\"></div>
<main role=\"main\" class=\"digital-story js-pagepiling\">

  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 125
        echo "
  ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

</main>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/page/page--digital-story.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 126,  221 => 125,  211 => 116,  204 => 113,  196 => 111,  194 => 110,  189 => 109,  187 => 108,  183 => 106,  176 => 103,  168 => 101,  166 => 100,  161 => 99,  159 => 98,  153 => 94,  147 => 92,  144 => 91,  138 => 89,  136 => 88,  128 => 82,  124 => 80,  111 => 78,  108 => 77,  104 => 76,  100 => 74,  94 => 72,  92 => 71,  80 => 62,  76 => 61,  64 => 52,  60 => 51,  46 => 40,  43 => 39,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.main_nav: Items for the primary menu region.
 * - page.content: The main content of the current page.
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

{{ page.main_nav }}

<div class=\"js-loading loading\">
  <div class=\"loader\">
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
    <div class=\"ball\"></div>
  </div>
</div>
<a href=\"#\" class=\"dashboard-toggle js-dashboard-toggle js-closed button-with-icon\">
  <i class=\"icon--med\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-hamburger-md.svg') }}</i>
  <i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-hamburger-sm.svg') }}</i>
</a>
<div class=\"dashboard js-dashboard js-closed\">
  <nav>
    <div class=\"dashboard-header\">
      <div class=\"container\">
        <div class=\"l-1up\">
          <a href=\"#\" class=\"dashboard-close js-dashboard-close button-with-icon\">
            <div>Close</div>
            <i class=\"icon--med\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-close-md.svg') }}</i>
            <i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-close-sm.svg') }}</i>
          </a>
        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"l-1up\">

        {% if node.field_alternate_menu.value is not empty %}
        {{ node.field_alternate_menu.value|raw }}
        {% else %}
        <ul class=\"dashboard__nav-list\" id=\"myMenu\">
          <li class=\"dashboard__nav-item active\" data-menuanchor=\"start\"><a href=\"#start\">Start</a></li>
          {% for section in sectionTitles %}
          {% set sectionId = section|trim|clean_id %}
          <li class=\"dashboard__nav-item\" data-menuanchor=\"{{ sectionId }}\"><a href=\"#{{ sectionId }}\">{{ section }}</a></li>
          {% endfor %}
        </ul>
        {% endif %}
      </div>
    </div>
  </nav>
  <section class=\"dashboard-section\">
    <div class=\"container\">
      <div class=\"l-1up\">
        {% if node.field_non_member_ticket_link.uri|striptags|trim is not empty %}
        <a class=\"color-block-button--full\" href=\"{{ node.field_non_member_ticket_link.uri }}\">Tickets</a>
        {% endif %}
        {% if node.field_member_ticket_link.uri|striptags|trim is not empty %}
        <a class=\"color-block-button--full\" href=\"{{ node.field_member_ticket_link.uri }}\">Member Tickets</a>
        {% endif %}
      </div>
   </div>
    <div class=\"container\">
      <div class=\"l-2up\">
        {% if node.field_store_item_link.uri is not empty %}
        <a class=\"footer-link\" href=\"{{ node.field_store_item_link.uri }}\">
          {% if node.field_store_item_photo.entity.fileuri is not empty %}
          <img data-src=\"{{ file_url(node.field_store_item_photo.entity.fileuri) }}\" alt=\"{{ node.field_store_item_photo.entity.alt }}\">
          {% endif %}
          {{ node.field_store_item_title.value }}
        </a>
        {% endif %}
      </div>
      <div class=\"l-2up\">
        {% if node.field_digital_story_link.uri is not empty %}
        <a class=\"footer-link\" href=\"{{ node.field_digital_story_link.uri }}\">
          {% if node.field_digital_story_image.entity.fileuri is not empty %}
          <img data-src=\"{{ file_url(node.field_digital_story_image.entity.fileuri) }}\" alt=\"{{ node.field_store_item_photo.entity.alt }}\">
          {% endif %}
          {{ node.field_digital_story_title.value }}
        </a>
        {% endif %}
      </div>
    </div>
  </section>

</div>
<div class=\"dashboard-overlay-background js-dashboard-overlay-background\" style=\"display: none;\"></div>
<main role=\"main\" class=\"digital-story js-pagepiling\">

  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

  {{ page.content }}

</main>
", "themes/custom/famsf_digital_stories_theme/templates/page/page--digital-story.html.twig", "/srv/bindings/0ee7bf75f49f4504a23820fb488161f7/code/web/themes/custom/famsf_digital_stories_theme/templates/page/page--digital-story.html.twig");
    }
}
