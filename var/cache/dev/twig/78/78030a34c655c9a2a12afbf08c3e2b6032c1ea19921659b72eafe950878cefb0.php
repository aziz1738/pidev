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

/* reclamation/_form.html.twig */
class __TwigTemplate_df4f7297f33ccc9035c87c8ef07843126041ca054902e6a1b28266549d8fa78a extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                         ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "ref", [], "any", false, false, false, 2), 'widget');
        echo "
                          ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "ref", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "valid", [], "any", false, false, false, 3)) {
            // line 4
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "ref", [], "any", false, false, false, 5), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 8
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "sujet", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                          ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "sujet", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "valid", [], "any", false, false, false, 9)) {
            // line 10
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "sujet", [], "any", false, false, false, 11), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 14
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                          ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "                        <div class=\"alert alert-danger\">
                        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17), 'errors');
            echo "
                        </div>
                        ";
        }
        // line 20
        echo "                
                         ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'widget');
        echo "
                         <button class=\"btn\">";
        // line 22
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 22, $this->source); })()), "Send")) : ("Send")), "html", null, true);
        echo "</button>
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  99 => 22,  95 => 21,  92 => 20,  86 => 17,  83 => 16,  81 => 15,  76 => 14,  70 => 11,  67 => 10,  65 => 9,  60 => 8,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                        {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                         {{ form_widget(form.ref) }}
                          {% if not form.ref.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.ref) }}
                        </div>
                        {% endif %}
                        {{ form_widget(form.sujet,{'attr':{'class':'form-control'}}) }}
                          {% if not form.sujet.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.sujet) }}
                        </div>
                        {% endif %}
                        {{ form_widget(form.content,{'attr':{'class':'form-control'}}) }}
                          {% if not form.content.vars.valid %}
                        <div class=\"alert alert-danger\">
                        {{ form_errors(form.content) }}
                        </div>
                        {% endif %}
                
                         {{ form_widget(form) }}
                         <button class=\"btn\">{{ button_label|default('Send') }}</button>
                        {{ form_end(form) }}
", "reclamation/_form.html.twig", "C:\\Users\\Planete Gaming\\Desktop\\symfony\\pidev\\templates\\reclamation\\_form.html.twig");
    }
}
