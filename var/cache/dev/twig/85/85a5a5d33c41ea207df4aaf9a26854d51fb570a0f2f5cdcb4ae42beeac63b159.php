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

/* reclamation/new.html.twig */
class __TwigTemplate_9aec231af0828c5a021001c76bf000d74250c8705235d4df0f332bf2e482668e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reclamation/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/Frontoffice/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Contact Us</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Reclamation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class=\"contact-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title contact-title\">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class=\"contact-widget\">
                        <div class=\"cw-text\">
                            <i class=\"fa fa-map-marker\"></i>
                            <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                        </div>
                        <div class=\"cw-text\">
                            <i class=\"fa fa-mobile\"></i>
                            <ul>
                                <li>125-711-811</li>
                                <li>125-668-886</li>
                            </ul>
                        </div>
                        <div class=\"cw-text email\">
                            <i class=\"fa fa-envelope\"></i>
                            <p>Support.gymcenter@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"leave-comment\">
                ";
        // line 54
        echo twig_include($this->env, $context, "reclamation/_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
            <div class=\"map\">
                <iframe
                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd\"
                    height=\"550\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Reclamation{% endblock %}

{% block body %}
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/Frontoffice/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Contact Us</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Reclamation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class=\"contact-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title contact-title\">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class=\"contact-widget\">
                        <div class=\"cw-text\">
                            <i class=\"fa fa-map-marker\"></i>
                            <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                        </div>
                        <div class=\"cw-text\">
                            <i class=\"fa fa-mobile\"></i>
                            <ul>
                                <li>125-711-811</li>
                                <li>125-668-886</li>
                            </ul>
                        </div>
                        <div class=\"cw-text email\">
                            <i class=\"fa fa-envelope\"></i>
                            <p>Support.gymcenter@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"leave-comment\">
                {{ include('reclamation/_form.html.twig') }}
                    </div>
                </div>
            </div>
            <div class=\"map\">
                <iframe
                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd\"
                    height=\"550\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

{% endblock %}", "reclamation/new.html.twig", "C:\\Users\\Planete Gaming\\Desktop\\symfony\\pidev\\templates\\reclamation\\new.html.twig");
    }
}
