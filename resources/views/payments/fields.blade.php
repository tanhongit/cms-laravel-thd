<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Of Depositor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_of_depositor', 'Name Of Depositor:') !!}
    {!! Form::text('name_of_depositor', null, ['class' => 'form-control']) !!}
</div>

<!-- Proof Of Payment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proof_of_payment', 'Proof Of Payment:') !!}
    {!! Form::textarea('proof_of_payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Refund Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refund_details', 'Refund Details:') !!}
    {!! Form::text('refund_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Refund Payment Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refund_payment_details', 'Refund Payment Details:') !!}
    {!! Form::text('refund_payment_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Mode Of Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_of_payment', 'Mode Of Payment:') !!}
    {!! Form::text('mode_of_payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Processor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_processor', 'Payment Processor:') !!}
    {!! Form::text('payment_processor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-default">Cancel</a>
</div>
