<div>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="mb-3">
              <label for="phone_number" class="form-label">Phone Number</label>
              <input type="text" wire:model='phone_number' name="phone_number" id="phone_number" class="form-control" placeholder="Enter the Phone Number">
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="mb-3">
              <label for="amount" class="form-label">Amount</label>
              <input type="number" name="amount" wire:model='amount' id="amount" class="form-control" placeholder="Enter the Phone Number">
            </div>
        </div>
        <button wire:click='submit' class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
