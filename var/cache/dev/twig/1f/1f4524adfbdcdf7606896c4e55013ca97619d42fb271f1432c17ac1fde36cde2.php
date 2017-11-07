<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b6988ad80a222065d115429cf688af6004776c007220188524c878efd68d1d14 extends Twig_Template
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
        $__internal_d5b6ca242b7920c25378a39557d67f129ea90ce88bf60c3a8bf80cf4a976c4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b6ca242b7920c25378a39557d67f129ea90ce88bf60c3a8bf80cf4a976c4d8->enter($__internal_d5b6ca242b7920c25378a39557d67f129ea90ce88bf60c3a8bf80cf4a976c4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3c4ab2ead2de735c0b7d070d19284cab9cf702e12a6e3ca0da0192f1bbc888b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4ab2ead2de735c0b7d070d19284cab9cf702e12a6e3ca0da0192f1bbc888b3->enter($__internal_3c4ab2ead2de735c0b7d070d19284cab9cf702e12a6e3ca0da0192f1bbc888b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d5b6ca242b7920c25378a39557d67f129ea90ce88bf60c3a8bf80cf4a976c4d8->leave($__internal_d5b6ca242b7920c25378a39557d67f129ea90ce88bf60c3a8bf80cf4a976c4d8_prof);

        
        $__internal_3c4ab2ead2de735c0b7d070d19284cab9cf702e12a6e3ca0da0192f1bbc888b3->leave($__internal_3c4ab2ead2de735c0b7d070d19284cab9cf702e12a6e3ca0da0192f1bbc888b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
