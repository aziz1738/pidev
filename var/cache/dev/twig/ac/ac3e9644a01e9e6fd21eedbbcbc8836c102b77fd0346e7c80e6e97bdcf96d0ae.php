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

/* reclamation/index.html.twig */
class __TwigTemplate_acc1ae6595c986b3a8fb119d1f2fd3428cf60d8ac969a3042050fa46deaac9ea extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reclamation index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Reclamation table</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">id</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Ref</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Sujet</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Content</th>
                      <th class=\"text-secondary opacity-7\"></th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 29
            echo "                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "ref", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"badge badge-sm bg-gradient-success\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 41), "html", null, true);
            echo "</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "content", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                      </td>
                      
                      <td class=\"align-middle\">
                       <form method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to validate this item?');\">
                         <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 50))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-warning\">Valider</button>
                         </form>
                      </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  151 => 56,  140 => 50,  135 => 48,  128 => 44,  122 => 41,  116 => 38,  108 => 33,  102 => 29,  97 => 28,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}
  <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Reclamation table</h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">id</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Ref</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Sujet</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Content</th>
                      <th class=\"text-secondary opacity-7\"></th>
                    </tr>
                  </thead>
                  <tbody>
                  {% for reclamation in reclamations %}
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">{{ reclamation.id }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">{{ reclamation.ref }}</p>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"badge badge-sm bg-gradient-success\">{{ reclamation.sujet }}</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{ reclamation.content }}</span>
                      </td>
                      
                      <td class=\"align-middle\">
                       <form method=\"post\" action=\"{{ path('reclamation_delete', {'id': reclamation.id}) }}\" onsubmit=\"return confirm('Are you sure you want to validate this item?');\">
                         <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                        <button class=\"btn btn-warning\">Valider</button>
                         </form>
                      </td>
                    </tr>
                    {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\Planete Gaming\\Desktop\\symfony\\pidev\\templates\\reclamation\\index.html.twig");
    }
}
