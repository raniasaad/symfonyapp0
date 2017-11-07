<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_384065d7fe67edad29d1292b41f63aed61390efe666890b844b71ccf3d15f56b extends Twig_Template
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
        $__internal_291544f6db54850f0e32b914e74e2c55a07050ee57bb215baf09c957b2d1ae49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291544f6db54850f0e32b914e74e2c55a07050ee57bb215baf09c957b2d1ae49->enter($__internal_291544f6db54850f0e32b914e74e2c55a07050ee57bb215baf09c957b2d1ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6a9e33d3badf6cf7eb3268d392774a10951c22686b5369559c4733b6ea05695f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9e33d3badf6cf7eb3268d392774a10951c22686b5369559c4733b6ea05695f->enter($__internal_6a9e33d3badf6cf7eb3268d392774a10951c22686b5369559c4733b6ea05695f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_291544f6db54850f0e32b914e74e2c55a07050ee57bb215baf09c957b2d1ae49->leave($__internal_291544f6db54850f0e32b914e74e2c55a07050ee57bb215baf09c957b2d1ae49_prof);

        
        $__internal_6a9e33d3badf6cf7eb3268d392774a10951c22686b5369559c4733b6ea05695f->leave($__internal_6a9e33d3badf6cf7eb3268d392774a10951c22686b5369559c4733b6ea05695f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
