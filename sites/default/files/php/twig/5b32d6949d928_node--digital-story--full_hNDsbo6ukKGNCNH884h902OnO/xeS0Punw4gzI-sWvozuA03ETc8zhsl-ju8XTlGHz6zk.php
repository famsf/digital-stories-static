<?php

/* themes/custom/famsf_digital_stories_theme/templates/node/node--digital-story--full.html.twig */
class __TwigTemplate_33ac900f417d609350c2dafc147b61400a8700c9a4924de0849665dfdb7d1d5c extends Twig_Template
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
        $tags = array("set" => 70, "if" => 99, "trans" => 110);
        $filters = array("join" => 116, "clean_id" => 153, "trim" => 153, "date" => 258);
        $functions = array("file_url" => 116, "include" => 147, "active_theme_path" => 147);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('join', 'clean_id', 'trim', 'date'),
                array('file_url', 'include', 'active_theme_path')
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

        // line 70
        $context["boldTitle"] = (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_title_style", array()), "value", array()) == "has-backdrop") || ($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_title_style", array()), "value", array()) == "has-bold-outlined"));
        // line 71
        echo "
";
        // line 72
        $context["classes"] = array(0 => ((        // line 73
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("admin__article") : ("")));
        // line 75
        $context["wrapperClasses"] = array(0 => "site-hero", 1 => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 77
(isset($context["node"]) ? $context["node"] : null), "field_background_image", array()), "entity", array()), "fileuri", array())) ? ("") : ("pattern")));
        // line 79
        $context["sectionTitleWrapperClasses"] = array(0 => ((        // line 80
(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) ? ("site-hero__title--bold animated") : ("site-hero__title")), 1 => $this->getAttribute($this->getAttribute(        // line 81
(isset($context["node"]) ? $context["node"] : null), "field_title_position", array()), "value", array()), 2 => $this->getAttribute($this->getAttribute(        // line 82
(isset($context["node"]) ? $context["node"] : null), "field_title_style", array()), "value", array()), 3 => "delay-1250");
        // line 85
        $context["sectionHeroClasses"] = array(0 => ((        // line 86
(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) ? ("animated delay-1250") : ("")), 1 => ((($this->getAttribute($this->getAttribute(        // line 87
(isset($context["node"]) ? $context["node"] : null), "field_title_style", array()), "value", array()) != "has-backdrop")) ? ("site-hero__title-text") : ("")));
        // line 89
        $context["sectionTitleClasses"] = array(0 => ((        // line 90
(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) ? ("") : ("animated delay-1500")));
        // line 92
        echo "
";
        // line 93
        $context["animatedClasses"] = array(0 => "animated delay-1500");
        // line 96
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

    ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 99
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 100
            echo "        <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
            <a href=\"";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
        </h2>
    ";
        }
        // line 104
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 106
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 107
            echo "        <footer>
            ";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
            <div";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
            echo ">
                ";
            // line 110
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 111
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
            </div>
        </footer>
    ";
        }
        // line 115
        echo "    <section class=\"js-section pp-scrollable\" id=\"start\">
        <div class=\"";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["wrapperClasses"]) ? $context["wrapperClasses"] : null), " "), "html", null, true));
        echo "\" ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_site_hero_background_image", array()), "value", array()))) {
            echo "data-bg=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_site_hero_background_image", array()), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" style=\"background-position-y: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_hero_image_position", array()), "value", array()), "html", null, true));
            echo ";\"";
        }
        echo ">
            ";
        // line 117
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_language_link", array()), "value", array()))) {
            // line 118
            echo "            <div class=\"language-button\"><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_language_link", array()), "uri", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_language_link", array()), "title", array()), "html", null, true));
            echo "</a></div>
            ";
        }
        // line 120
        echo "            <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleWrapperClasses"]) ? $context["sectionTitleWrapperClasses"] : null), " "), "html", null, true));
        echo "\">
                ";
        // line 121
        if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
            // line 122
            echo "                    <div class=\"delay-3500 animated animated-border--top\"></div>
                ";
        }
        // line 124
        echo "                <div class=\"js-section-hero--get_height ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionHeroClasses"]) ? $context["sectionHeroClasses"] : null), " "), "html", null, true));
        echo "\">
                    <h2 class=\"ds-identity\">Digital Stories</h2>
                    <h1 class=\"";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleClasses"]) ? $context["sectionTitleClasses"] : null), " "), "html", null, true));
        echo "\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</h1>
                    ";
        // line 127
        if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_theme", array()), "value", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "legion") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
            // line 128
            echo "                    <span class=\"site-hero__logo ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["animatedClasses"]) ? $context["animatedClasses"] : null), " "), "html", null, true));
            echo "\"><a href=\"https://legionofhonor.famsf.org/\" >Legion of Honor Museum</a></span><br />
                    ";
        } else {
            // line 130
            echo "                    <span class=\"site-hero__logo ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["animatedClasses"]) ? $context["animatedClasses"] : null), " "), "html", null, true));
            echo "\"><a href=\"https://deyoung.famsf.org/\" >de Young Museum</a></span><br />
                    ";
        }
        // line 132
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_exhibition_dates", array()), "value", array()))) {
            // line 133
            echo "                      <h2 class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter((isset($context["sectionTitleClasses"]) ? $context["sectionTitleClasses"] : null), " "), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_exhibition_dates", array()), "value", array()), "html", null, true));
            echo "</h2>
                    ";
        }
        // line 135
        echo "                </div>
                ";
        // line 136
        if ( !(isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
            // line 137
            echo "                <div class=\"site-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                <div class=\"site-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                ";
        }
        // line 140
        echo "                ";
        if ((isset($context["boldTitle"]) ? $context["boldTitle"] : null)) {
            // line 141
            echo "                    <div class=\"delay-3500 animated animated-border--bottom\"></div>
                ";
        }
        // line 143
        echo "            </div>
        </div>
        <button class=\"js-next-page next-page hero animated delay-100\">
            <div class=\"icon--xsmall\">
                ";
        // line 147
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-caret-down-sm.svg"))));
        echo "
            </div>
        next page
        </button>
    </section>
    ";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_section", array()), "html", null, true));
        echo "
    <section class=\"js-section pp-scrollable footer\" id=\"";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_footer_title", array()), "value", array()))), "html", null, true));
        echo "\">
        <footer class=\"card-section\">
            <div class=\"container\">
                <div class=\"l-1up\">
                    <h2>";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_footer_title", array()), "value", array()), "html", null, true));
        echo "</h2>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"l-33-66--3\">
                    ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_footer_feature", array()), "html", null, true));
        echo "
                </div>
            </div>

            <div class=\"container\">

                <div class=\"l-2up--1\">
                    <h3 class=\"footer-section__title\">Visiting</h3>
                    ";
        // line 170
        if ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_theme", array()), "value", array())) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "legion") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)))) {
            // line 171
            echo "                    <img class=\"footer-img__half\" data-src=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true));
            echo "/imgs/footer/visiting.png\" alt=\"Guests spend time in the courtyard at the Legion of Honor\" />
                    <div class=\"footer-block__half\">
                        <h4>Legion of Honor </h4>
                        <p>Lincoln Park, 100 34th Avenue, San Francisco<br />Open 9:30 a.m.– 5:15 p.m.<br />Tuesdays–Sundays.<br />415 750-3600</p>

                        <p>
                            <a class=\"footer-link\" href=\"https://www.famsf.org/\">Fine Arts Museums of San Francisco</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://deyoung.famsf.org/\">de Young</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://legionofhonor.famsf.org/\">Legion of Honor</a>
                        </p>
                    </div>
                    <!-- Legion follow links -->
                    <h4>Follow Us</h4>
                    <ul class=\"social-media\">
                        <li class=\"social-media__item\">
                            <a href=\"https://www.facebook.com/LegionofHonor/\"><span>Facebook</span><i class=\"icon--small\">";
            // line 188
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-facebook-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://twitter.com/legionofhonor\"><span>Twitter</span><i class=\"icon--small\">";
            // line 191
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-twitter-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.instagram.com/legionofhonor/\"><span>Instagram</span><i class=\"icon--small\">";
            // line 194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-instagram-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://legionofhonormuseum.tumblr.com/\"><span>Tumblr</span><i class=\"icon--small\">";
            // line 197
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-tumblr-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://www.youtube.com/famsf\"><span>Youtube</span><i class=\"icon--small\">";
            // line 200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-youtube-md.svg"))));
            echo "</i></a>
                        </li>
                    </ul>
                ";
        } else {
            // line 204
            echo "                    <img class=\"footer-img__half\" data-src=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true));
            echo "/imgs/footer/visiting.jpg\" alt=\"Guests spend time in the courtyard at the de Young\" />
                    <div class=\"footer-block__half\">
                        <h4>de Young Museum </h4>
                        <p>Golden Gate Park, 50 Hagiwara Tea Garden Drive, San Francisco, CA 94118<br />Open 9:30 a.m.– 5:15 p.m.<br />Tuesdays–Sundays.<br />415 750-3600</p>

                        <p>
                            <a class=\"footer-link\" href=\"https://www.famsf.org/\">Fine Arts Museums of San Francisco</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://deyoung.famsf.org/\">de Young</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://legionofhonor.famsf.org/\">Legion of Honor</a>
                        </p>
                    </div>
                    <!-- de Young follow links -->
                    <h4>Follow Us</h4>
                    <ul class=\"social-media\">
                        <li class=\"social-media__item\">
                            <a href=\"https://www.facebook.com/deYoungMuseum/\"><span>Facebook</span><i class=\"icon--small\">";
            // line 221
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-facebook-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://twitter.com/deyoungmuseum\"><span>Twitter</span><i class=\"icon--small\">";
            // line 224
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-twitter-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.instagram.com/deyoungmuseum/\"><span>Instagram</span><i class=\"icon--small\">";
            // line 227
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-instagram-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://deyoungmuseum.tumblr.com/\"><span>Tumblr</span><i class=\"icon--small\">";
            // line 230
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-tumblr-md.svg"))));
            echo "</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.youtube.com/user/FAMSF\"><span>Youtube</span><i class=\"icon--small\">";
            // line 233
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/famsf-youtube-md.svg"))));
            echo "</i></a>
                        </li>
                    </ul>
                ";
        }
        // line 237
        echo "                </div>
                ";
        // line 238
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_sponsor", array()), "#items", array(), "array"))) {
            // line 239
            echo "                <div class=\"l-2up--2\">
                    <h3 class=\"footer-section__title\">Special Thanks</h3>
                    ";
            // line 241
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_sponsor", array()), "html", null, true));
            echo "
                </div>
                ";
        }
        // line 244
        echo "            </div>
            <div class=\"container footer-small\">
                <div class=\"l-2up--1\">
                    ";
        // line 247
        if ((is_string($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_theme", array()), "value", array())) && is_string($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = "legion") && ('' === $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 || 0 === strpos($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217, $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105)))) {
            // line 248
            echo "                    <a href=\"https://legionofhonor.famsf.org/contact\">Contact</a>
                    <a href=\"https://legionofhonor.famsf.org/privacy\">Privacy</a>
                    <a href=\"https://legionofhonor.famsf.org/terms\">Terms &amp; Conditions</a>
                    ";
        } else {
            // line 252
            echo "                    <a href=\"https://deyoung.famsf.org/contact\">Contact</a>
                    <a href=\"https://deyoung.famsf.org/privacy\">Privacy</a>
                    <a href=\"https://deyoung.famsf.org/terms\">Terms &amp; Conditions</a>
                    ";
        }
        // line 256
        echo "                </div>
                <div class=\"l-2up--2\">
                    <p class=\"footer-small__copyright\">&copy;";
        // line 258
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " Fine Arts Museums of San Francisco</p>
                </div>
            </div>
        </footer>
    </section>
</article>
<div class=\"zoom-overlay-background js-zoom-overlay-background\" style=\"display: none;\">
</div>
<div class=\"zoom-window js-zoom-window\" style=\"display: none;\">
    <button class=\"zoom-close js-zoom-close\" href=\"#\" style=\"display: none;\">
        <i class=\"icon--small\">
            ";
        // line 269
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_include($this->env, $context, ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/svg/") . (isset($context["custom_theme"]) ? $context["custom_theme"] : null)) . "/famsf-close-md.svg"))));
        echo "
        </i>
        <div class=\"zoom-marker__text\">close</div>
    </button>
    <div class=\"zoom-window__content js-zoom-window__content\" style=\"display: none;\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/famsf_digital_stories_theme/templates/node/node--digital-story--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 269,  403 => 258,  399 => 256,  393 => 252,  387 => 248,  385 => 247,  380 => 244,  374 => 241,  370 => 239,  368 => 238,  365 => 237,  358 => 233,  352 => 230,  346 => 227,  340 => 224,  334 => 221,  313 => 204,  306 => 200,  300 => 197,  294 => 194,  288 => 191,  282 => 188,  261 => 171,  259 => 170,  248 => 162,  240 => 157,  233 => 153,  229 => 152,  221 => 147,  215 => 143,  211 => 141,  208 => 140,  203 => 137,  201 => 136,  198 => 135,  190 => 133,  187 => 132,  181 => 130,  175 => 128,  173 => 127,  167 => 126,  161 => 124,  157 => 122,  155 => 121,  150 => 120,  142 => 118,  140 => 117,  128 => 116,  125 => 115,  117 => 111,  115 => 110,  111 => 109,  107 => 108,  104 => 107,  102 => 106,  96 => 104,  88 => 101,  83 => 100,  81 => 99,  77 => 98,  71 => 96,  69 => 93,  66 => 92,  64 => 90,  63 => 89,  61 => 87,  60 => 86,  59 => 85,  57 => 82,  56 => 81,  55 => 80,  54 => 79,  52 => 77,  51 => 75,  49 => 73,  48 => 72,  45 => 71,  43 => 70,);
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
 * Theme override to display a digital story node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
{% set boldTitle = (node.field_title_style.value == 'has-backdrop' or node.field_title_style.value == 'has-bold-outlined') %}

{% set classes = [
logged_in? 'admin__article'
] %}
{% set wrapperClasses = [
'site-hero',
node.field_background_image.entity.fileuri?'':'pattern'
] %}
{% set sectionTitleWrapperClasses = [
boldTitle?'site-hero__title--bold animated':'site-hero__title',
node.field_title_position.value,
node.field_title_style.value,
'delay-1250'
] %}
{% set sectionHeroClasses = [
boldTitle?'animated delay-1250':'',
node.field_title_style.value != 'has-backdrop'?'site-hero__title-text',
] %}
{% set sectionTitleClasses = [
boldTitle?'':'animated delay-1500',
] %}

{% set animatedClasses = [
'animated delay-1500',
] %}
<article{{ attributes.addClass(classes) }}>

    {{ title_prefix }}
    {% if not page %}
        <h2{{ title_attributes }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
    {% endif %}
    {{ title_suffix }}

    {% if display_submitted %}
        <footer>
            {{ author_picture }}
            <div{{ author_attributes }}>
                {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
                {{ metadata }}
            </div>
        </footer>
    {% endif %}
    <section class=\"js-section pp-scrollable\" id=\"start\">
        <div class=\"{{ wrapperClasses|join(' ') }}\" {% if node.field_site_hero_background_image.value is not empty %}data-bg=\"{{ file_url(node.field_site_hero_background_image.entity.fileuri) }}\" style=\"background-position-y: {{ node.field_hero_image_position.value }};\"{% endif %}>
            {% if node.field_language_link.value is not empty %}
            <div class=\"language-button\"><a href=\"{{ node.field_language_link.uri }}\">{{ node.field_language_link.title }}</a></div>
            {% endif %}
            <div class=\"{{ sectionTitleWrapperClasses|join(' ') }}\">
                {% if boldTitle %}
                    <div class=\"delay-3500 animated animated-border--top\"></div>
                {% endif %}
                <div class=\"js-section-hero--get_height {{ sectionHeroClasses|join(' ')}}\">
                    <h2 class=\"ds-identity\">Digital Stories</h2>
                    <h1 class=\"{{ sectionTitleClasses|join(' ') }}\"> {{ label }}</h1>
                    {% if node.field_theme.value starts with 'legion' %}
                    <span class=\"site-hero__logo {{ animatedClasses|join(' ') }}\"><a href=\"https://legionofhonor.famsf.org/\" >Legion of Honor Museum</a></span><br />
                    {% else %}
                    <span class=\"site-hero__logo {{ animatedClasses|join(' ') }}\"><a href=\"https://deyoung.famsf.org/\" >de Young Museum</a></span><br />
                    {% endif %}
                    {% if node.field_exhibition_dates.value is not empty %}
                      <h2 class=\"{{ sectionTitleClasses|join(' ') }}\">{{ node.field_exhibition_dates.value }}</h2>
                    {% endif %}
                </div>
                {% if not boldTitle %}
                <div class=\"site-hero__rectangle top animated fadeInLeft delay-250 js-section-hero--set_height\"></div>
                <div class=\"site-hero__rectangle bottom animated fadeInRight delay-250 js-section-hero--set_height\"></div>
                {% endif %}
                {% if boldTitle %}
                    <div class=\"delay-3500 animated animated-border--bottom\"></div>
                {% endif %}
            </div>
        </div>
        <button class=\"js-next-page next-page hero animated delay-100\">
            <div class=\"icon--xsmall\">
                {{ include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-caret-down-sm.svg') }}
            </div>
        next page
        </button>
    </section>
    {{ content.field_section }}
    <section class=\"js-section pp-scrollable footer\" id=\"{{ node.field_footer_title.value|trim|clean_id }}\">
        <footer class=\"card-section\">
            <div class=\"container\">
                <div class=\"l-1up\">
                    <h2>{{ node.field_footer_title.value }}</h2>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"l-33-66--3\">
                    {{ content.field_footer_feature }}
                </div>
            </div>

            <div class=\"container\">

                <div class=\"l-2up--1\">
                    <h3 class=\"footer-section__title\">Visiting</h3>
                    {% if node.field_theme.value starts with 'legion' %}
                    <img class=\"footer-img__half\" data-src=\"/{{ active_theme_path() }}/imgs/footer/visiting.png\" alt=\"Guests spend time in the courtyard at the Legion of Honor\" />
                    <div class=\"footer-block__half\">
                        <h4>Legion of Honor </h4>
                        <p>Lincoln Park, 100 34th Avenue, San Francisco<br />Open 9:30 a.m.– 5:15 p.m.<br />Tuesdays–Sundays.<br />415 750-3600</p>

                        <p>
                            <a class=\"footer-link\" href=\"https://www.famsf.org/\">Fine Arts Museums of San Francisco</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://deyoung.famsf.org/\">de Young</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://legionofhonor.famsf.org/\">Legion of Honor</a>
                        </p>
                    </div>
                    <!-- Legion follow links -->
                    <h4>Follow Us</h4>
                    <ul class=\"social-media\">
                        <li class=\"social-media__item\">
                            <a href=\"https://www.facebook.com/LegionofHonor/\"><span>Facebook</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-facebook-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://twitter.com/legionofhonor\"><span>Twitter</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-twitter-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.instagram.com/legionofhonor/\"><span>Instagram</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-instagram-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://legionofhonormuseum.tumblr.com/\"><span>Tumblr</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-tumblr-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://www.youtube.com/famsf\"><span>Youtube</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-youtube-md.svg') }}</i></a>
                        </li>
                    </ul>
                {% else %}
                    <img class=\"footer-img__half\" data-src=\"/{{ active_theme_path() }}/imgs/footer/visiting.jpg\" alt=\"Guests spend time in the courtyard at the de Young\" />
                    <div class=\"footer-block__half\">
                        <h4>de Young Museum </h4>
                        <p>Golden Gate Park, 50 Hagiwara Tea Garden Drive, San Francisco, CA 94118<br />Open 9:30 a.m.– 5:15 p.m.<br />Tuesdays–Sundays.<br />415 750-3600</p>

                        <p>
                            <a class=\"footer-link\" href=\"https://www.famsf.org/\">Fine Arts Museums of San Francisco</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://deyoung.famsf.org/\">de Young</a>
                            <br />
                            <a class=\"footer-link\" href=\"https://legionofhonor.famsf.org/\">Legion of Honor</a>
                        </p>
                    </div>
                    <!-- de Young follow links -->
                    <h4>Follow Us</h4>
                    <ul class=\"social-media\">
                        <li class=\"social-media__item\">
                            <a href=\"https://www.facebook.com/deYoungMuseum/\"><span>Facebook</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-facebook-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://twitter.com/deyoungmuseum\"><span>Twitter</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-twitter-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.instagram.com/deyoungmuseum/\"><span>Instagram</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-instagram-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"http://deyoungmuseum.tumblr.com/\"><span>Tumblr</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-tumblr-md.svg') }}</i></a>
                        </li>
                        <li class=\"social-media__item\">
                            <a href=\"https://www.youtube.com/user/FAMSF\"><span>Youtube</span><i class=\"icon--small\">{{ include(active_theme_path() ~ '/svg/famsf-youtube-md.svg') }}</i></a>
                        </li>
                    </ul>
                {% endif %}
                </div>
                {% if content.field_sponsor['#items'] is not empty %}
                <div class=\"l-2up--2\">
                    <h3 class=\"footer-section__title\">Special Thanks</h3>
                    {{ content.field_sponsor }}
                </div>
                {% endif %}
            </div>
            <div class=\"container footer-small\">
                <div class=\"l-2up--1\">
                    {% if node.field_theme.value starts with 'legion' %}
                    <a href=\"https://legionofhonor.famsf.org/contact\">Contact</a>
                    <a href=\"https://legionofhonor.famsf.org/privacy\">Privacy</a>
                    <a href=\"https://legionofhonor.famsf.org/terms\">Terms &amp; Conditions</a>
                    {% else %}
                    <a href=\"https://deyoung.famsf.org/contact\">Contact</a>
                    <a href=\"https://deyoung.famsf.org/privacy\">Privacy</a>
                    <a href=\"https://deyoung.famsf.org/terms\">Terms &amp; Conditions</a>
                    {% endif %}
                </div>
                <div class=\"l-2up--2\">
                    <p class=\"footer-small__copyright\">&copy;{{ \"now\"|date(\"Y\") }} Fine Arts Museums of San Francisco</p>
                </div>
            </div>
        </footer>
    </section>
</article>
<div class=\"zoom-overlay-background js-zoom-overlay-background\" style=\"display: none;\">
</div>
<div class=\"zoom-window js-zoom-window\" style=\"display: none;\">
    <button class=\"zoom-close js-zoom-close\" href=\"#\" style=\"display: none;\">
        <i class=\"icon--small\">
            {{  include(active_theme_path() ~ '/svg/'~ custom_theme ~ '/famsf-close-md.svg') }}
        </i>
        <div class=\"zoom-marker__text\">close</div>
    </button>
    <div class=\"zoom-window__content js-zoom-window__content\" style=\"display: none;\">
    </div>
</div>
", "themes/custom/famsf_digital_stories_theme/templates/node/node--digital-story--full.html.twig", "/srv/bindings/c12861ad40624a2d94cd97886b9a87dc/code/web/themes/custom/famsf_digital_stories_theme/templates/node/node--digital-story--full.html.twig");
    }
}
