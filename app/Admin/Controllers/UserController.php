<?php

namespace App\Admin\Controllers;

use App\Model\UserModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\UserModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserModel());

        $grid->column('id', __('编号'));
        $grid->column('username', __('名称'));
        $grid->column('email', __('邮箱'));
        $grid->column('mobile', __('电话'));

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
        $show = new Show(UserModel::findOrFail($id));

        $show->field('id', __('编号'));
        $show->field('username', __('名称'));
        $show->field('email', __('邮箱'));
        $show->field('password', __('密码'));
        $show->field('mobile', __('电话'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UserModel());

        $form->text('username', __('名称'));
        $form->email('email', __('邮箱'));
        $form->password('password', __('密码'));
        $form->mobile('mobile', __('电话'));

        return $form;
    }
}
