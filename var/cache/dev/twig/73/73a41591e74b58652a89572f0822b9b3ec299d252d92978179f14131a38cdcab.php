<?php

/* ::base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9623329f33ad1c5cfb7ff47869762d32875fecc939436614c3726b03efa23cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9623329f33ad1c5cfb7ff47869762d32875fecc939436614c3726b03efa23cc9->enter($__internal_9623329f33ad1c5cfb7ff47869762d32875fecc939436614c3726b03efa23cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b692b92ea5f0602f6c96380416aa6f4b5c88617392d6c9a1716345e5ab28199c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b692b92ea5f0602f6c96380416aa6f4b5c88617392d6c9a1716345e5ab28199c->enter($__internal_b692b92ea5f0602f6c96380416aa6f4b5c88617392d6c9a1716345e5ab28199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9623329f33ad1c5cfb7ff47869762d32875fecc939436614c3726b03efa23cc9->leave($__internal_9623329f33ad1c5cfb7ff47869762d32875fecc939436614c3726b03efa23cc9_prof);

        
        $__internal_b692b92ea5f0602f6c96380416aa6f4b5c88617392d6c9a1716345e5ab28199c->leave($__internal_b692b92ea5f0602f6c96380416aa6f4b5c88617392d6c9a1716345e5ab28199c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40427e4cd405b24cd6f794c49f26df07c89eba9189d68334b11b7eb1455d7c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40427e4cd405b24cd6f794c49f26df07c89eba9189d68334b11b7eb1455d7c26->enter($__internal_40427e4cd405b24cd6f794c49f26df07c89eba9189d68334b11b7eb1455d7c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79bc9e8720708f2b4f62175c8a4f8629561670607be3654c1260968acb0ec409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bc9e8720708f2b4f62175c8a4f8629561670607be3654c1260968acb0ec409->enter($__internal_79bc9e8720708f2b4f62175c8a4f8629561670607be3654c1260968acb0ec409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79bc9e8720708f2b4f62175c8a4f8629561670607be3654c1260968acb0ec409->leave($__internal_79bc9e8720708f2b4f62175c8a4f8629561670607be3654c1260968acb0ec409_prof);

        
        $__internal_40427e4cd405b24cd6f794c49f26df07c89eba9189d68334b11b7eb1455d7c26->leave($__internal_40427e4cd405b24cd6f794c49f26df07c89eba9189d68334b11b7eb1455d7c26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8feb5cc3463d6a38eeeb04557e8624ad909a55c099a3977e8fe84c99f1c4c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8feb5cc3463d6a38eeeb04557e8624ad909a55c099a3977e8fe84c99f1c4c09->enter($__internal_c8feb5cc3463d6a38eeeb04557e8624ad909a55c099a3977e8fe84c99f1c4c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0770394b5509b909e0405983b8ddf69bb61c082c7b976666742ef9703ed7783e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0770394b5509b909e0405983b8ddf69bb61c082c7b976666742ef9703ed7783e->enter($__internal_0770394b5509b909e0405983b8ddf69bb61c082c7b976666742ef9703ed7783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0770394b5509b909e0405983b8ddf69bb61c082c7b976666742ef9703ed7783e->leave($__internal_0770394b5509b909e0405983b8ddf69bb61c082c7b976666742ef9703ed7783e_prof);

        
        $__internal_c8feb5cc3463d6a38eeeb04557e8624ad909a55c099a3977e8fe84c99f1c4c09->leave($__internal_c8feb5cc3463d6a38eeeb04557e8624ad909a55c099a3977e8fe84c99f1c4c09_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0663c4a69b64e21f4fab6518d697917b2e2ce6d3a4e2bcfeb47061fd4f48d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0663c4a69b64e21f4fab6518d697917b2e2ce6d3a4e2bcfeb47061fd4f48d44->enter($__internal_c0663c4a69b64e21f4fab6518d697917b2e2ce6d3a4e2bcfeb47061fd4f48d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1567cb7e83d2208069c31ecfc9a5008bd303a14630ef08edfeacf19a40e1a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1567cb7e83d2208069c31ecfc9a5008bd303a14630ef08edfeacf19a40e1a08->enter($__internal_e1567cb7e83d2208069c31ecfc9a5008bd303a14630ef08edfeacf19a40e1a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1567cb7e83d2208069c31ecfc9a5008bd303a14630ef08edfeacf19a40e1a08->leave($__internal_e1567cb7e83d2208069c31ecfc9a5008bd303a14630ef08edfeacf19a40e1a08_prof);

        
        $__internal_c0663c4a69b64e21f4fab6518d697917b2e2ce6d3a4e2bcfeb47061fd4f48d44->leave($__internal_c0663c4a69b64e21f4fab6518d697917b2e2ce6d3a4e2bcfeb47061fd4f48d44_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a97ae7c48b4201fe07fd590ff9d0ac0ae6a5fad5943d0cf2e069f24c68d0ccc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97ae7c48b4201fe07fd590ff9d0ac0ae6a5fad5943d0cf2e069f24c68d0ccc9->enter($__internal_a97ae7c48b4201fe07fd590ff9d0ac0ae6a5fad5943d0cf2e069f24c68d0ccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ebdf8eccba7f5299c831d1535c7451f761e8daaca7e17c6c51e2ac3be2e78c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebdf8eccba7f5299c831d1535c7451f761e8daaca7e17c6c51e2ac3be2e78c8->enter($__internal_7ebdf8eccba7f5299c831d1535c7451f761e8daaca7e17c6c51e2ac3be2e78c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ebdf8eccba7f5299c831d1535c7451f761e8daaca7e17c6c51e2ac3be2e78c8->leave($__internal_7ebdf8eccba7f5299c831d1535c7451f761e8daaca7e17c6c51e2ac3be2e78c8_prof);

        
        $__internal_a97ae7c48b4201fe07fd590ff9d0ac0ae6a5fad5943d0cf2e069f24c68d0ccc9->leave($__internal_a97ae7c48b4201fe07fd590ff9d0ac0ae6a5fad5943d0cf2e069f24c68d0ccc9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/app/Resources/views/base.html.twig");
    }
}
