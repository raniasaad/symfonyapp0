<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c09c65e749ddb5e5503aa8ace49b9c164a1635795f580df8248d2740dab027df extends Twig_Template
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
        $__internal_c36546590762ffb1177033cc173c7afc9129d7e4905b40995326e1f8b1944d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36546590762ffb1177033cc173c7afc9129d7e4905b40995326e1f8b1944d57->enter($__internal_c36546590762ffb1177033cc173c7afc9129d7e4905b40995326e1f8b1944d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_195bbe6950207ac089d6b454323d82940a42569f54fe01599da9126c4a5fd033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195bbe6950207ac089d6b454323d82940a42569f54fe01599da9126c4a5fd033->enter($__internal_195bbe6950207ac089d6b454323d82940a42569f54fe01599da9126c4a5fd033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c36546590762ffb1177033cc173c7afc9129d7e4905b40995326e1f8b1944d57->leave($__internal_c36546590762ffb1177033cc173c7afc9129d7e4905b40995326e1f8b1944d57_prof);

        
        $__internal_195bbe6950207ac089d6b454323d82940a42569f54fe01599da9126c4a5fd033->leave($__internal_195bbe6950207ac089d6b454323d82940a42569f54fe01599da9126c4a5fd033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
