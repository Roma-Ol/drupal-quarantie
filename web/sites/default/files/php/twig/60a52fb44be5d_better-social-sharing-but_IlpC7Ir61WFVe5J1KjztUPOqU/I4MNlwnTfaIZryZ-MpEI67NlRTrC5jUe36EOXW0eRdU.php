<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig */
class __TwigTemplate_4336ecf5a05a58e3bfee1bb0046a6e07fb94bbac8ab9c78ee4bd9efd29ecbcae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true));
        echo "

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 3)) {
            // line 4
            echo "  ";
            $context["width"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 4)) ? ((("width=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 4), 4, $this->source)) . "")) : (""));
            // line 5
            echo "  ";
            $context["height"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 5)) ? ((("height=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 5), 5, $this->source)) . "")) : (""));
        }
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 8)) {
            // line 9
            echo "    ";
            $context["radius"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 9)) ? ((("style=border-radius:" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 9), 9, $this->source)) . ";")) : (""));
        }
        // line 11
        echo "
";
        // line 13
        echo "<div style=\"display: none\">";
        $this->loadTemplate(($context["social_buttons_sprite"] ?? null), "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", 13)->display($context);
        echo "</div>

<div class=\"social-sharing-buttons\">
    <!-- Facebook share button -->
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 17), "facebook", [], "any", false, false, true, 17)) {
            // line 18
            echo "        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Facebook\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Facebook\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 19, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 19, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 19, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 20, $this->source), "html", null, true));
            echo "#facebook\" />
            </svg>
        </a>
    ";
        }
        // line 24
        echo "
    <!-- Twitter share button -->
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 26), "twitter", [], "any", false, false, true, 26)) {
            // line 27
            echo "        <a href=\"http://twitter.com/intent/tweet?text=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
            echo "+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Twitter\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Twitter\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 28, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 28, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 28, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 29, $this->source), "html", null, true));
            echo "#twitter\" />
            </svg>
        </a>
    ";
        }
        // line 33
        echo "
    <!-- WhatsApp share button -->
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 35), "whatsapp", [], "any", false, false, true, 35)) {
            // line 36
            echo "        <a href=\"https://wa.me/?text=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " WhatsApp\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " WhatsApp\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 37, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 37, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 37, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 38, $this->source), "html", null, true));
            echo "#whatsapp\" />
            </svg>
        </a>
    ";
        }
        // line 42
        echo "
    <!-- Facebook Messenger share button -->
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 44), "facebook_messenger", [], "any", false, false, true, 44)) {
            // line 45
            echo "        <a href=\"http://www.facebook.com/dialog/send?app_id=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "facebook_app_id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true));
            echo "&link=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 45), 45, $this->source), "html", null, true));
            echo "&redirect_uri=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>")));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Facebook Messenger\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Facebook Messenger\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 46, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 46, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 46, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 47, $this->source), "html", null, true));
            echo "#messenger\" />
            </svg>
        </a>
    ";
        }
        // line 51
        echo "
    <!-- Pinterest share button -->
    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 53), "pinterest", [], "any", false, false, true, 53)) {
            // line 54
            echo "        <a href=\"http://pinterest.com/pin/create/link/?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true));
            echo "&description=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Pinterest\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Pinterest\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 55, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 55, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 55, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 56, $this->source), "html", null, true));
            echo "#pinterest\" />
            </svg>
        </a>
    ";
        }
        // line 60
        echo "
    <!-- Linkedin share button -->
    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 62), "linkedin", [], "any", false, false, true, 62)) {
            // line 63
            echo "        <a href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true));
            echo "&source=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "base_url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Linkedin\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Linkedin\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 64, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 64, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 64, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 65, $this->source), "html", null, true));
            echo "#linkedin\" />
            </svg>
        </a>
    ";
        }
        // line 69
        echo "
    <!-- Digg share button -->
    ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 71), "digg", [], "any", false, false, true, 71)) {
            // line 72
            echo "        <a href=\"http://www.digg.com/submit?phase=2&url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 72), 72, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Digg\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Digg\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 73, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 73, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 73, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 74, $this->source), "html", null, true));
            echo "#digg\" />
            </svg>
        </a>
    ";
        }
        // line 78
        echo "
    <!-- StumbleUpon share button -->
    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 80), "stumbleupon", [], "any", false, false, true, 80)) {
            // line 81
            echo "        <a href=\"http://www.stumbleupon.com/submit?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 81), 81, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 81), 81, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " StumbleUpon\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " StumbleUpon\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 82, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 82, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 82, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 83, $this->source), "html", null, true));
            echo "#stumbleupon\" />
            </svg>
        </a>
    ";
        }
        // line 87
        echo "
    <!-- Slashdot share button -->
    ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 89), "slashdot", [], "any", false, false, true, 89)) {
            // line 90
            echo "        <a href=\"http://slashdot.org/bookmark.pl?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 90), 90, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 90), 90, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Slashdot\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Slashdot\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 91, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 91, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 91, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 92, $this->source), "html", null, true));
            echo "#slashdot\" />
            </svg>
        </a>
    ";
        }
        // line 96
        echo "
    <!-- Tumblr share button -->
    ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 98), "tumblr", [], "any", false, false, true, 98)) {
            // line 99
            echo "        <a href=\"http://www.tumblr.com/share?v=3&u=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 99), 99, $this->source), "html", null, true));
            echo "&t=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Tumblr\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Tumblr\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 100, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 100, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 100, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 101, $this->source), "html", null, true));
            echo "#tumblr\" />
            </svg>
        </a>
    ";
        }
        // line 105
        echo "
    <!-- Reddit share button -->
    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 107), "reddit", [], "any", false, false, true, 107)) {
            // line 108
            echo "        <a href=\"http://www.reddit.com/submit?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 108), 108, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 108), 108, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Reddit\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Reddit\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 109, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 109, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 109, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 110, $this->source), "html", null, true));
            echo "#reddit\" />
            </svg>
        </a>
    ";
        }
        // line 114
        echo "
    <!-- Evernote share button -->
    ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 116), "evernote", [], "any", false, false, true, 116)) {
            // line 117
            echo "        <a href=\"http://www.evernote.com/clip.action?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 117), 117, $this->source), "html", null, true));
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 117), 117, $this->source), "html", null, true));
            echo "\" target=\"_blank\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Evernote\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " Evernote\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 118, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 118, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 118, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 119, $this->source), "html", null, true));
            echo "#evernote\" />
            </svg>
        </a>
    ";
        }
        // line 123
        echo "
    <!-- Email share button -->
    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 125), "email", [], "any", false, false, true, 125)) {
            // line 126
            echo "        <a href=\"mailto:?subject=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 126), 126, $this->source), "html", null, true));
            echo "&body=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 126), 126, $this->source), "html", null, true));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " E-mail\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to")));
            echo " E-mail\" class=\"social-sharing-buttons__button\" target=\"_blank\" rel=\"noopener\">
            <svg ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 127, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 127, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 127, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 128, $this->source), "html", null, true));
            echo "#email\" />
            </svg>
        </a>
    ";
        }
        // line 132
        echo "
    <!-- Copy link share button -->
    ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 134), "copy", [], "any", false, false, true, 134)) {
            // line 135
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true));
            echo "
        <button class=\"btnCopy social-sharing-buttons__button\">
            <svg ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 137, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 137, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 137, $this->source), "html", null, true));
            echo ">
                <use href=\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 138, $this->source), "html", null, true));
            echo "#copy\" />
            </svg>
            <div class=\"social-sharing-buttons__popup\">";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copied to clipboard")));
            echo "</div>
        </button>
    ";
        }
        // line 143
        echo "
  <!-- Print share button -->
  ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 145), "print", [], "any", false, false, true, 145)) {
            // line 146
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 146)) {
                // line 147
                echo "      ";
                $context["href"] = "#";
                // line 148
                echo "      ";
                $context["rel"] = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 148);
                // line 149
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/print-css"), "html", null, true));
                echo "
    ";
            } else {
                // line 151
                echo "      ";
                $context["href"] = "javascript:window.print()";
                // line 152
                echo "    ";
            }
            // line 153
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 153, $this->source), "html", null, true));
            echo "\" rel=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rel"] ?? null), 153, $this->source), "html", null, true));
            echo "\" id=\"printlink\">
      <svg ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 154, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 154, $this->source), "html", null, true));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 154, $this->source), "html", null, true));
            echo ">
        <use href=\"";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 155, $this->source), "html", null, true));
            echo "#print\" />
      </svg>
    </a>
  ";
        }
        // line 159
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 159,  560 => 155,  552 => 154,  545 => 153,  542 => 152,  539 => 151,  533 => 149,  530 => 148,  527 => 147,  524 => 146,  522 => 145,  518 => 143,  512 => 140,  507 => 138,  499 => 137,  493 => 135,  491 => 134,  487 => 132,  480 => 128,  472 => 127,  461 => 126,  459 => 125,  455 => 123,  448 => 119,  440 => 118,  429 => 117,  427 => 116,  423 => 114,  416 => 110,  408 => 109,  397 => 108,  395 => 107,  391 => 105,  384 => 101,  376 => 100,  365 => 99,  363 => 98,  359 => 96,  352 => 92,  344 => 91,  333 => 90,  331 => 89,  327 => 87,  320 => 83,  312 => 82,  301 => 81,  299 => 80,  295 => 78,  288 => 74,  280 => 73,  269 => 72,  267 => 71,  263 => 69,  256 => 65,  248 => 64,  235 => 63,  233 => 62,  229 => 60,  222 => 56,  214 => 55,  203 => 54,  201 => 53,  197 => 51,  190 => 47,  182 => 46,  169 => 45,  167 => 44,  163 => 42,  156 => 38,  148 => 37,  139 => 36,  137 => 35,  133 => 33,  126 => 29,  118 => 28,  107 => 27,  105 => 26,  101 => 24,  94 => 20,  86 => 19,  75 => 18,  73 => 17,  65 => 13,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  49 => 5,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('better_social_sharing_buttons/styling') }}

{% if items.width %}
  {% set width = items.width ? 'width=' ~ items.width ~'' %}
  {% set height = items.width ? 'height=' ~ items.width ~'' %}
{% endif %}

{% if items.radius %}
    {% set radius = items.radius ? 'style=border-radius:' ~ items.radius ~';' %}
{% endif %}

{# --- Include svg sprite --- #}
<div style=\"display: none\">{% include social_buttons_sprite %}</div>

<div class=\"social-sharing-buttons\">
    <!-- Facebook share button -->
    {% if items.services.facebook %}
        <a href=\"https://www.facebook.com/sharer/sharer.php?u={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Facebook\" aria-label=\"{{ 'Share to'|t }} Facebook\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#facebook\" />
            </svg>
        </a>
    {% endif %}

    <!-- Twitter share button -->
    {% if items.services.twitter %}
        <a href=\"http://twitter.com/intent/tweet?text={{ items.title }}+{{ items.page_url }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Twitter\" aria-label=\"{{ 'Share to'|t }} Twitter\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#twitter\" />
            </svg>
        </a>
    {% endif %}

    <!-- WhatsApp share button -->
    {% if items.services.whatsapp %}
        <a href=\"https://wa.me/?text={{ items.page_url }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} WhatsApp\" aria-label=\"{{ 'Share to'|t }} WhatsApp\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#whatsapp\" />
            </svg>
        </a>
    {% endif %}

    <!-- Facebook Messenger share button -->
    {% if items.services.facebook_messenger %}
        <a href=\"http://www.facebook.com/dialog/send?app_id={{ items.facebook_app_id }}&link={{ items.page_url }}&redirect_uri={{ url('<current>') }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Facebook Messenger\" aria-label=\"{{ 'Share to'|t }} Facebook Messenger\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#messenger\" />
            </svg>
        </a>
    {% endif %}

    <!-- Pinterest share button -->
    {% if items.services.pinterest %}
        <a href=\"http://pinterest.com/pin/create/link/?url={{ items.page_url }}&description={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Pinterest\" aria-label=\"{{ 'Share to'|t }} Pinterest\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#pinterest\" />
            </svg>
        </a>
    {% endif %}

    <!-- Linkedin share button -->
    {% if items.services.linkedin %}
        <a href=\"http://www.linkedin.com/shareArticle?mini=true&url={{ items.page_url }}&title={{ items.title }}&source={{ items.base_url }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Linkedin\" aria-label=\"{{ 'Share to'|t }} Linkedin\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#linkedin\" />
            </svg>
        </a>
    {% endif %}

    <!-- Digg share button -->
    {% if items.services.digg %}
        <a href=\"http://www.digg.com/submit?phase=2&url={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Digg\" aria-label=\"{{ 'Share to'|t }} Digg\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#digg\" />
            </svg>
        </a>
    {% endif %}

    <!-- StumbleUpon share button -->
    {% if items.services.stumbleupon %}
        <a href=\"http://www.stumbleupon.com/submit?url={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} StumbleUpon\" aria-label=\"{{ 'Share to'|t }} StumbleUpon\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#stumbleupon\" />
            </svg>
        </a>
    {% endif %}

    <!-- Slashdot share button -->
    {% if items.services.slashdot %}
        <a href=\"http://slashdot.org/bookmark.pl?url={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Slashdot\" aria-label=\"{{ 'Share to'|t }} Slashdot\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#slashdot\" />
            </svg>
        </a>
    {% endif %}

    <!-- Tumblr share button -->
    {% if items.services.tumblr %}
        <a href=\"http://www.tumblr.com/share?v=3&u={{ items.page_url }}&t={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Tumblr\" aria-label=\"{{ 'Share to'|t }} Tumblr\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#tumblr\" />
            </svg>
        </a>
    {% endif %}

    <!-- Reddit share button -->
    {% if items.services.reddit %}
        <a href=\"http://www.reddit.com/submit?url={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Reddit\" aria-label=\"{{ 'Share to'|t }} Reddit\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#reddit\" />
            </svg>
        </a>
    {% endif %}

    <!-- Evernote share button -->
    {% if items.services.evernote %}
        <a href=\"http://www.evernote.com/clip.action?url={{ items.page_url }}&title={{ items.title }}\" target=\"_blank\" title=\"{{ 'Share to'|t }} Evernote\" aria-label=\"{{ 'Share to'|t }} Evernote\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#evernote\" />
            </svg>
        </a>
    {% endif %}

    <!-- Email share button -->
    {% if items.services.email %}
        <a href=\"mailto:?subject={{ items.title }}&body={{ items.page_url }}\" title=\"{{ 'Share to'|t }} E-mail\" aria-label=\"{{ 'Share to'|t }} E-mail\" class=\"social-sharing-buttons__button\" target=\"_blank\" rel=\"noopener\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#email\" />
            </svg>
        </a>
    {% endif %}

    <!-- Copy link share button -->
    {% if items.services.copy %}
        {{ attach_library('better_social_sharing_buttons/copy-current-url') }}
        <button class=\"btnCopy social-sharing-buttons__button\">
            <svg {{ width }} {{ height }} {{ radius }}>
                <use href=\"{{ social_buttons_sprite }}#copy\" />
            </svg>
            <div class=\"social-sharing-buttons__popup\">{{ 'Copied to clipboard'|t }}</div>
        </button>
    {% endif %}

  <!-- Print share button -->
  {% if items.services.print %}
    {% if items.print_css %}
      {% set href = \"#\" %}
      {% set rel = items.print_css %}
      {{ attach_library('better_social_sharing_buttons/print-css') }}
    {% else %}
      {% set href = \"javascript:window.print()\" %}
    {% endif %}
    <a href=\"{{ href }}\" rel=\"{{ rel }}\" id=\"printlink\">
      <svg {{ width }} {{ height }} {{ radius }}>
        <use href=\"{{ social_buttons_sprite }}#print\" />
      </svg>
    </a>
  {% endif %}
</div>
", "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", "/var/www/web/modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 4, "include" => 13);
        static $filters = array("escape" => 1, "t" => 18);
        static $functions = array("attach_library" => 1, "url" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
