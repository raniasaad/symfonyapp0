<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b47ad4bcf27d388f919aa4d02f72b8c3735308a48f90ff9af33b7ca84fd3b1a5 extends Twig_Template
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
        $__internal_f0445d2df3c0f97c0d560ce497cfaae20f71bbd20558b9d3aac5c19cfe6b4565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0445d2df3c0f97c0d560ce497cfaae20f71bbd20558b9d3aac5c19cfe6b4565->enter($__internal_f0445d2df3c0f97c0d560ce497cfaae20f71bbd20558b9d3aac5c19cfe6b4565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d99521e60e129d79f2568b156628b89e4c05f03b83013d4c71a844d363ffd511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99521e60e129d79f2568b156628b89e4c05f03b83013d4c71a844d363ffd511->enter($__internal_d99521e60e129d79f2568b156628b89e4c05f03b83013d4c71a844d363ffd511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f0445d2df3c0f97c0d560ce497cfaae20f71bbd20558b9d3aac5c19cfe6b4565->leave($__internal_f0445d2df3c0f97c0d560ce497cfaae20f71bbd20558b9d3aac5c19cfe6b4565_prof);

        
        $__internal_d99521e60e129d79f2568b156628b89e4c05f03b83013d4c71a844d363ffd511->leave($__internal_d99521e60e129d79f2568b156628b89e4c05f03b83013d4c71a844d363ffd511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
