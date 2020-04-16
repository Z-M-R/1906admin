<?php

namespace App\Admin\Controllers;

use App\Model\PinModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PinController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\PinModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PinModel());

        $grid->column('p_id', __('P id'));
        $grid->column('P_name', __('P name'));
        $grid->column('p_img', __('P img'))->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(PinModel::findOrFail($id));

        $show->field('p_id', __('P id'));
        $show->field('P_name', __('P name'));
        $show->field('p_img', __('P img'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PinModel());

        $form->text('P_name', __('P name'));
        $form->image('p_img', __('P img'));

        return $form;
    }
}
