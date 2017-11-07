<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e6def5d283c7b0d3c2f6d145fe24878db5aac479fa3974963bcb40a89d46fa05 extends Twig_Template
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
        $__internal_9a4b8f510d5fad9c4b81111c872505aac53d2f869833469a7764fe76ef21b4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4b8f510d5fad9c4b81111c872505aac53d2f869833469a7764fe76ef21b4c6->enter($__internal_9a4b8f510d5fad9c4b81111c872505aac53d2f869833469a7764fe76ef21b4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_648c2d46110b7d82c357008a66b199fd9f59156af2aa2196969c8a9cfd34dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648c2d46110b7d82c357008a66b199fd9f59156af2aa2196969c8a9cfd34dd52->enter($__internal_648c2d46110b7d82c357008a66b199fd9f59156af2aa2196969c8a9cfd34dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9a4b8f510d5fad9c4b81111c872505aac53d2f869833469a7764fe76ef21b4c6->leave($__internal_9a4b8f510d5fad9c4b81111c872505aac53d2f869833469a7764fe76ef21b4c6_prof);

        
        $__internal_648c2d46110b7d82c357008a66b199fd9f59156af2aa2196969c8a9cfd34dd52->leave($__internal_648c2d46110b7d82c357008a66b199fd9f59156af2aa2196969c8a9cfd34dd52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
