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

/* emploi/index.html.twig */
class __TwigTemplate_c492fb9cae38fe9d95641123d59207369172d0fa4f074a1f89c9b777ef5ba555 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 150
        return "@!EasyAdmin/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi/index.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/default/layout.html.twig", "emploi/index.html.twig", 150);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 5
        echo "    ";
        // line 6
        echo "<table class=\"table  text-right\" border=\"0\">
    <tr>
        <div class=\"row\" >
            <td><p style=\"margin-left: 70px; margin-bottom: 0px\">جــــدول الأوقــــــــات</p></td>
            <td>وزارة الــدفــــــاع الـوطـــنــي</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
      <td>جـــــيـــــــــش الـــــطـــــيـــــران</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () { throw new RuntimeError('Variable "emploi" does not exist.', 21, $this->source); })()), "datefin", [], "any", false, false, false, 21), "Y/m/d"), "html", null, true);
        echo "&nbsp; &nbsp; &nbsp;";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () { throw new RuntimeError('Variable "emploi" does not exist.', 21, $this->source); })()), "dateDebut", [], "any", false, false, false, 21), "Y/m/d"), "html", null, true);
        echo "</td>
            <td>الـــمـــــســتـــوى: الشهادة الوطنية للإجازة التطبيقيـَة</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
            <td>\"الإخـــتـــصـــاص: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () { throw new RuntimeError('Variable "emploi" does not exist.', 28, $this->source); })()), "classe", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "  \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () { throw new RuntimeError('Variable "emploi" does not exist.', 28, $this->source); })()), "classe", [], "any", false, false, false, 28), "promotion", [], "any", false, false, false, 28), "designation", [], "any", false, false, false, 28), "html", null, true);
        echo "  </td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
            <td>عـديد التـلامــذة: &nbsp;&nbsp;&nbsp; ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emploi"]) || array_key_exists("emploi", $context) ? $context["emploi"] : (function () { throw new RuntimeError('Variable "emploi" does not exist.', 34, $this->source); })()), "classe", [], "any", false, false, false, 34), "nbeleve", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>

        </div>
    </tr>
</table>
<br><br><br>
<div ><table class=\"table table-bordered text-center\">
        <tr>
            <th>15:25 -> 16:55</th>
            <th>13:45 -> 15:15</th>
            <th>11:25 -> 12:55</th>
            <th>09:50 -> 11:20</th>
            <th>08:05 -> 09:35</th>
            <th></th>
        </tr>

        <tr>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الإثنان</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الثلاثاء</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الإربعاء</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الخميس</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الجمعة</th>
        </tr>

        <tr>
             <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>السبت</th>
        </tr>

        <div class=\"modal fade\" id=\"s5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">choisissez une matière</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body\"><div class=\"col-md-10\">
                   ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["states"]) || array_key_exists("states", $context) ? $context["states"] : (function () { throw new RuntimeError('Variable "states" does not exist.', 133, $this->source); })()), 'widget');
        echo "
                        </div>
                        Vouler-voulez écriver une chose de votre choix?<a  href=\"#\" data-toggle=\"modal\" data-target=\"#lu5\"><input type=\"button\" class=\"btn btn-primary \" value=\"Oui\"  /></a>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\" >valider</button>

                    </div>
                </div>
            </div>
        </div>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emploi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 133,  110 => 34,  99 => 28,  87 => 21,  70 => 6,  68 => 5,  58 => 4,  35 => 150,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/bundles/EasyAdminBundle/default/layout.html.twig #}

{# DON'T DO THIS: it will cause an infinite loop #}
{% block content_title %}
    {# ... customize the content title ... #}
<table class=\"table  text-right\" border=\"0\">
    <tr>
        <div class=\"row\" >
            <td><p style=\"margin-left: 70px; margin-bottom: 0px\">جــــدول الأوقــــــــات</p></td>
            <td>وزارة الــدفــــــاع الـوطـــنــي</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
      <td>جـــــيـــــــــش الـــــطـــــيـــــران</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td>{{ emploi.datefin |date('Y/m/d') }}&nbsp; &nbsp; &nbsp;{{ emploi.dateDebut |date('Y/m/d') }}</td>
            <td>الـــمـــــســتـــوى: الشهادة الوطنية للإجازة التطبيقيـَة</td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
            <td>\"الإخـــتـــصـــاص: {{ emploi.classe.nom }}  \"{{ emploi.classe.promotion.designation }}  </td>
        </div>
    </tr>
    <tr>
        <div class=\"row\" >
            <td></td>
            <td>عـديد التـلامــذة: &nbsp;&nbsp;&nbsp; {{ emploi.classe.nbeleve }}</td>

        </div>
    </tr>
</table>
<br><br><br>
<div ><table class=\"table table-bordered text-center\">
        <tr>
            <th>15:25 -> 16:55</th>
            <th>13:45 -> 15:15</th>
            <th>11:25 -> 12:55</th>
            <th>09:50 -> 11:20</th>
            <th>08:05 -> 09:35</th>
            <th></th>
        </tr>

        <tr>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الإثنان</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الثلاثاء</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الإربعاء</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الخميس</th>
        </tr>

        <tr>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>
            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>الجمعة</th>
        </tr>

        <tr>
             <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>


            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <td><a  href=\"#\" data-toggle=\"modal\" data-target=\"#s5\"><input type=\"button\" class=\"btn btn-primary \" value=\"+\"  /></a></td>

            <th>السبت</th>
        </tr>

        <div class=\"modal fade\" id=\"s5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">choisissez une matière</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body\"><div class=\"col-md-10\">
                   {{ form_widget(states) }}
                        </div>
                        Vouler-voulez écriver une chose de votre choix?<a  href=\"#\" data-toggle=\"modal\" data-target=\"#lu5\"><input type=\"button\" class=\"btn btn-primary \" value=\"Oui\"  /></a>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                        <button type=\"submit\" class=\"btn btn-primary\" >valider</button>

                    </div>
                </div>
            </div>
        </div>
    </table>
</div>
{% endblock %}

{# DO THIS: the '!' symbol tells Symfony to extend from the original template #}
{% extends '@!EasyAdmin/default/layout.html.twig' %}
", "emploi/index.html.twig", "/home/monta/Documents/Work/gestion-Emploi-master_1/gestion-Emploi-master/templates/emploi/index.html.twig");
    }
}
