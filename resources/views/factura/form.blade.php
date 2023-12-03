
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha') }}</label>
    <div>
        {{ Form::text('fecha', $factura->fecha, ['class' => 'form-control' .
        ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>fecha</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Número_de_factura') }}</label>
    <div>
        {{ Form::text('Número_de_factura', $factura->Número_de_factura, ['class' => 'form-control' .
        ($errors->has('Número_de_factura') ? ' is-invalid' : ''), 'placeholder' => 'Número De Factura']) }}
        {!! $errors->first('Número_de_factura', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>Número_de_factura</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $factura->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Número_de_cliente') }}</label>
    <div>
        {{ Form::text('Número_de_cliente', $factura->Número_de_cliente, ['class' => 'form-control' .
        ($errors->has('Número_de_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Número De Cliente']) }}
        {!! $errors->first('Número_de_cliente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>Número_de_cliente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('correo') }}</label>
    <div>
        {{ Form::text('correo', $factura->correo, ['class' => 'form-control' .
        ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
        {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>correo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Direccion') }}</label>
    <div>
        {{ Form::text('Direccion', $factura->Direccion, ['class' => 'form-control' .
        ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
        {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>Direccion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estado') }}</label>
    <div>
        {{ Form::text('Estado', $factura->Estado, ['class' => 'form-control' .
        ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">factura <b>Estado</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
