<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b37bc502eb42b863c78dba08d2e1f4ef1425c382d72819f82dc1e9257de360d3 extends Twig_Template
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
        $__internal_fe1b00c01e6e42b6e64188525219ef5f40cbd45eb03723ca3e48feb1f8055be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1b00c01e6e42b6e64188525219ef5f40cbd45eb03723ca3e48feb1f8055be0->enter($__internal_fe1b00c01e6e42b6e64188525219ef5f40cbd45eb03723ca3e48feb1f8055be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_31208ec67a7486cddde1f49ab02bbd22a441aca49f8d94ccae7b0f8a918cda19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31208ec67a7486cddde1f49ab02bbd22a441aca49f8d94ccae7b0f8a918cda19->enter($__internal_31208ec67a7486cddde1f49ab02bbd22a441aca49f8d94ccae7b0f8a918cda19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fe1b00c01e6e42b6e64188525219ef5f40cbd45eb03723ca3e48feb1f8055be0->leave($__internal_fe1b00c01e6e42b6e64188525219ef5f40cbd45eb03723ca3e48feb1f8055be0_prof);

        
        $__internal_31208ec67a7486cddde1f49ab02bbd22a441aca49f8d94ccae7b0f8a918cda19->leave($__internal_31208ec67a7486cddde1f49ab02bbd22a441aca49f8d94ccae7b0f8a918cda19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
