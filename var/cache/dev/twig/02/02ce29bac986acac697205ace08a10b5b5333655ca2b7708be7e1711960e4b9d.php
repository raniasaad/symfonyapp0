<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_3810052e5f25fdec7fa5d66492276906d03d2bcf61c5dbc73483040701e1ec6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47afc5a804c35e5dcb7d3b140e7a8dd40dab68d573da035982c7e54b0fa2cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47afc5a804c35e5dcb7d3b140e7a8dd40dab68d573da035982c7e54b0fa2cdc->enter($__internal_b47afc5a804c35e5dcb7d3b140e7a8dd40dab68d573da035982c7e54b0fa2cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_b6c1a23d9e8d191230875d82c89856784b1557bc5628f4c15ed5747c3f71b2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c1a23d9e8d191230875d82c89856784b1557bc5628f4c15ed5747c3f71b2bb->enter($__internal_b6c1a23d9e8d191230875d82c89856784b1557bc5628f4c15ed5747c3f71b2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47afc5a804c35e5dcb7d3b140e7a8dd40dab68d573da035982c7e54b0fa2cdc->leave($__internal_b47afc5a804c35e5dcb7d3b140e7a8dd40dab68d573da035982c7e54b0fa2cdc_prof);

        
        $__internal_b6c1a23d9e8d191230875d82c89856784b1557bc5628f4c15ed5747c3f71b2bb->leave($__internal_b6c1a23d9e8d191230875d82c89856784b1557bc5628f4c15ed5747c3f71b2bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efeefa003ad9e2556f032742331004b551851a745998d342a7650cbd8ab0e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efeefa003ad9e2556f032742331004b551851a745998d342a7650cbd8ab0e8c->enter($__internal_0efeefa003ad9e2556f032742331004b551851a745998d342a7650cbd8ab0e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4a3e01bc09d393834dc15d8d54fc282ac4bd76c13c1e2dfdd187138cf2d545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a3e01bc09d393834dc15d8d54fc282ac4bd76c13c1e2dfdd187138cf2d545a->enter($__internal_f4a3e01bc09d393834dc15d8d54fc282ac4bd76c13c1e2dfdd187138cf2d545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4a3e01bc09d393834dc15d8d54fc282ac4bd76c13c1e2dfdd187138cf2d545a->leave($__internal_f4a3e01bc09d393834dc15d8d54fc282ac4bd76c13c1e2dfdd187138cf2d545a_prof);

        
        $__internal_0efeefa003ad9e2556f032742331004b551851a745998d342a7650cbd8ab0e8c->leave($__internal_0efeefa003ad9e2556f032742331004b551851a745998d342a7650cbd8ab0e8c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_777644816c781f84631d4cc89281d25a9d9b36fa1f046d852904964e3db2125b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777644816c781f84631d4cc89281d25a9d9b36fa1f046d852904964e3db2125b->enter($__internal_777644816c781f84631d4cc89281d25a9d9b36fa1f046d852904964e3db2125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4e90954e38becc123be8677516c24ecdfc803f856fed6c1398967eae4a5d19fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e90954e38becc123be8677516c24ecdfc803f856fed6c1398967eae4a5d19fe->enter($__internal_4e90954e38becc123be8677516c24ecdfc803f856fed6c1398967eae4a5d19fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "image", array()))) {
            // line 13
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
";
        }
        // line 15
        echo "  <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 16, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 31, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>
";
        // line 36
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 36, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 37
            echo "  <p>
    Cette annonce est parue dans les catégories suivantes :
    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 39, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 41
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "  </p>
";
        }
        // line 44
        echo "
";
        // line 45
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 45, $this->getSourceContext()); })())) > 0)) {
            // line 46
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 49, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 50
                echo "        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </ul>
  </div>
";
        }
        
        $__internal_4e90954e38becc123be8677516c24ecdfc803f856fed6c1398967eae4a5d19fe->leave($__internal_4e90954e38becc123be8677516c24ecdfc803f856fed6c1398967eae4a5d19fe_prof);

        
        $__internal_777644816c781f84631d4cc89281d25a9d9b36fa1f046d852904964e3db2125b->leave($__internal_777644816c781f84631d4cc89281d25a9d9b36fa1f046d852904964e3db2125b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 52,  188 => 50,  184 => 49,  179 => 46,  177 => 45,  174 => 44,  170 => 42,  156 => 41,  150 => 40,  133 => 39,  129 => 37,  127 => 36,  119 => 31,  112 => 27,  105 => 23,  98 => 19,  90 => 16,  85 => 15,  77 => 13,  75 => 12,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

{# On vérifie qu'une image soit bien associée à l'annonce #}
{% if advert.image is not null %}
  <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
{% endif %}
  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>
{% if not advert.categories.empty %}
  <p>
    Cette annonce est parue dans les catégories suivantes :
    {% for category in advert.categories %}
      {{ category.name }}{% if not loop.last %}, {% endif %}
    {% endfor %}
  </p>
{% endif %}

{% if listAdvertSkills|length > 0 %}
  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      {% for advertSkill in listAdvertSkills %}
        <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
      {% endfor %}
    </ul>
  </div>
{% endif %}
{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
