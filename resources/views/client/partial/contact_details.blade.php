<div class="card-body">
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.first_name')</label>
        <div class="col-sm-9">
            <input name="id" type="hidden" v-model="contact.id" value="{{ $client->present()->id ?: -1}}">
            <input ref="first_name" name="first_name" placeholder="@lang('texts.first_name')" class="form-control" v-model="contact.first_name">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.last_name')</label>
        <div class="col-sm-9">
            <input name="last_name" placeholder="@lang('texts.last_name')" class="form-control" v-model="contact.last_name">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.email')</label>
        <div class="col-sm-9">
            <input name="email" placeholder="@lang('texts.email')" class="form-control" v-model="contact.email">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.phone')</label>
        <div class="col-sm-9">
            <input name="phone" placeholder="@lang('texts.phone')" class="form-control" v-model="contact.phone">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.custom_value1')</label>
        <div class="col-sm-9">
            <input name="custom_value1" placeholder="@lang('texts.custom_value1')" class="form-control" v-model="contact.custom_value1">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label text-right">@lang('texts.custom_value2')</label>
        <div class="col-sm-9">
            <input name="custom_value2" placeholder="@lang('texts.custom_value2')" class="form-control" v-model="contact.custom_value2">
        </div>
    </div>
    <div class="float-right">
        <button type="button" class="btn btn-danger" v-on:click="remove(contact)"> {{ trans('texts.remove_contact') }}</button>
    </div>
</div>


