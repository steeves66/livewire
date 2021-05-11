<div>
    {{-- The best athlete wants his opponent at his best. --}}
    
    <form wire:submitprevent="formSubmit" method="POST">
    	@csrf
    	<div>
    		<div class="label">
				<label for="hero-field"> {{ __('Your Email Adress') }} : </label>
				<input type="email" wire:model="email" id="hero-field" name="hero-field">
    		</div>
    		<button type="submit"> {{ __('Subscribe') }} </button>
    	</div>
    	@if($success == 'OK')
    		<p> {{ __('You are now in the waiting list !') }} </p>
    	@elseif ($success == 'NOK')
    		<p> {{ __('You already are in the waiting list !') }} </p>
    	@else
    		<p> {{ __('Waiting list for beta testing. !') }} </p>
    </form>
</div>
