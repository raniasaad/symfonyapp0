<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
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
        $__internal_4c861b4e6874bc7e00e9a0642457ef26d4d442141012d734ec241a39d55b5495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c861b4e6874bc7e00e9a0642457ef26d4d442141012d734ec241a39d55b5495->enter($__internal_4c861b4e6874bc7e00e9a0642457ef26d4d442141012d734ec241a39d55b5495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_cbe4d289d94dac40b570af1766401c811d6a89628d21a6427ecba1bada62109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe4d289d94dac40b570af1766401c811d6a89628d21a6427ecba1bada62109c->enter($__internal_cbe4d289d94dac40b570af1766401c811d6a89628d21a6427ecba1bada62109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4c861b4e6874bc7e00e9a0642457ef26d4d442141012d734ec241a39d55b5495->leave($__internal_4c861b4e6874bc7e00e9a0642457ef26d4d442141012d734ec241a39d55b5495_prof);

        
        $__internal_cbe4d289d94dac40b570af1766401c811d6a89628d21a6427ecba1bada62109c->leave($__internal_cbe4d289d94dac40b570af1766401c811d6a89628d21a6427ecba1bada62109c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
