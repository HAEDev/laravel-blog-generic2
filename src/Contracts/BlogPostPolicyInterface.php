<?php

namespace Lnch\LaravelBlog\Contracts;

use Lnch\LaravelBlog\Models\BlogPostIntranet as BlogPost;

interface BlogPostPolicyInterface
{
    public function view($user);
    public function view_draft_post($user, BlogPost $post);
    public function create($user);
    public function edit($user, BlogPost $post);
    public function delete($user, BlogPost $post);
}